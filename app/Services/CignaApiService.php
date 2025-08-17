<?php
// app/Services/CignaApiService.php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CignaApiService
{
    protected $baseUrl;
    protected $token;

    public function __construct()
    {
        $this->baseUrl = config('services.cigna.base_url');
        $this->token = $this->getAccessToken();
    }

    protected function getAccessToken()
    {
        $response = Http::asForm()->post($this->baseUrl . '', [
            'grant_type' => 'client_credentials',
            'client_id' => config('services.cigna.client_id'),
            'client_secret' => config('services.cigna.client_secret'),
        ]);

        return $response->json('access_token');
    }

    public function getEligibility($patientId)
    {
        $response = Http::withToken($this->token)
            ->acceptJson()
            ->get($this->baseUrl . "/Coverage?patient={$patientId}");

        return $response->json();
    }
}
