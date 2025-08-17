<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class CignaOauthController extends Controller
{
    private function http(): Client
    {
        return new Client(['timeout' => 20]);
    }

    private function authBase(): string
    {
        return rtrim(env('CIGNA_AUTH_BASE'), '/');
    }

    private function fhirBase(): string
    {
        return rtrim(env('CIGNA_FHIR_BASE'), '/');
    }

    public function login(Request $request)
    {
        // Generate state & nonce to protect the flow
        $state = (string) Str::uuid();
        $nonce = (string) Str::uuid();

        $request->session()->put('cigna_oauth_state', $state);
        $request->session()->put('cigna_oauth_nonce', $nonce);

        $authorize = $this->authBase() . '/authorize';

        $params = [
            'response_type' => 'code',
            'client_id'     => env('CIGNA_CLIENT_ID'),
            'redirect_uri'  => env('CIGNA_REDIRECT_URI'),
            'scope'         => env('CIGNA_SCOPES'),
            'state'         => $state,
            'nonce'         => $nonce,
            // Optional SMART parameters; include if your portal/app needs them
            // 'aud'        => $this->fhirBase(), // some SMART servers require aud
        ];

        return redirect()->away($authorize . '?' . http_build_query($params));
    }

    public function callback(Request $request)
    {
        $code  = $request->query('code');
        $state = $request->query('state');

        // CSRF/state check
        if (!$code || !$state || $state !== $request->session()->get('cigna_oauth_state')) {
            abort(400, 'Invalid state or missing code.');
        }

        $tokenEndpoint = $this->authBase() . '/token';

        // Standard Authorization Code exchange with client secret (server-side app)
        $form = [
            'grant_type'   => 'authorization_code',
            'code'         => $code,
            'redirect_uri' => env('CIGNA_REDIRECT_URI'),
            'client_id'    => env('CIGNA_CLIENT_ID'),
            'client_secret'=> env('CIGNA_CLIENT_SECRET'),
        ];

        $res = $this->http()->post($tokenEndpoint, ['form_params' => $form]);
        $tokens = json_decode((string) $res->getBody(), true);

        // Persist securely — demo stores in session; prefer DB encrypted at rest.
        $request->session()->put('cigna_tokens', [
            'access_token'  => $tokens['access_token'] ?? null,
            'refresh_token' => $tokens['refresh_token'] ?? null,
            'id_token'      => $tokens['id_token'] ?? null,
            'expires_in'    => $tokens['expires_in'] ?? null,
            'obtained_at'   => time(),
            'patient'       => $tokens['patient'] ?? null, // often returned
            'scope'         => $tokens['scope'] ?? null,
            'token_type'    => $tokens['token_type'] ?? 'bearer',
        ]);

        return redirect()->route('cigna.coverage');
    }

    public function coverage(Request $request)
    {
        $tokens = $request->session()->get('cigna_tokens');
        if (!$tokens || empty($tokens['access_token'])) {
            return redirect()->route('cigna.login');
        }

        $accessToken = $tokens['access_token'];
        $patientId = $tokens['patient'] ?? null;

        // If patient id wasn't in token response, many implementations expose $userinfo to derive it
        if (!$patientId) {
            $resUser = $this->http()->get($this->fhirBase() . '/$userinfo', [
                'headers' => ['Authorization' => "Bearer {$accessToken}"],
            ]);
            $ui = json_decode((string) $resUser->getBody(), true);
            $patientId = $ui['identifier'] ?? $ui['patient'] ?? null;
        }

        if (!$patientId) {
            abort(400, 'Patient identifier not available.');
        }

        // Read Coverage for the patient (eligibility-style details)
        $res = $this->http()->get($this->fhirBase() . '/Coverage', [
            'headers' => [
                'Authorization' => "Bearer {$accessToken}",
                'Accept'        => 'application/fhir+json',
            ],
            'query'   => ['patient' => $patientId],
        ]);

        return response($res->getBody(), $res->getStatusCode())
            ->header('Content-Type', 'application/fhir+json');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['cigna_tokens', 'cigna_oauth_state', 'cigna_oauth_nonce']);
        return redirect('/')->with('status', 'Disconnected from Cigna.');
    }
}
