<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Eligibility;

class EligibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eligibilities = Eligibility::orderBy('updated_at', 'desc')->get();
        return view('eligibilities.index', compact('eligibilities'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create($patientId = null)
    {
        $patient = Patient::findOrFail($patientId);
        return view('eligibilities.create', compact('patientId', 'patient'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'insurance_name' => 'required|string|max:255',
            'network_status' => 'required|string|max:255',
            'coverage_data' => 'array', // Ensure data is an array
            'coverage_data.*' => 'nullable|string|max:255', // Validate each field
            // 'fluoride_sealants_data' => 'nullable|json',
            // Add validation rules for other fields as needed
        ]);

        $examData = [
            'periodic_exam' => [
                'frequency' => $request->input('periodic_exam_frequency'),
                'history' => $request->input('periodic_exam_history'),
            ],
            'comp_exam' => [
                'frequency' => $request->input('comp_exam_frequency'),
                'history' => $request->input('comp_exam_history'),
            ],
            'consultation' => [
                'frequency' => $request->input('consultation_frequency'),
                'history' => $request->input('consultation_history'),
            ],
            'fac_photographic' => [
                'frequency' => $request->input('fac_photographic_frequency'),
                'history' => $request->input('fac_photographic_history'),
            ],
            'prophy' => [
                'frequency' => $request->input('prophy_frequency'),
                'history' => $request->input('prophy_history'),
            ],
            'bw' => [
                'frequency' => $request->input('bw_frequency'),
                'history' => $request->input('bw_history'),
            ],
            'fmx_pano' => [
                'frequency' => $request->input('fmx_pano_frequency'),
                'history' => $request->input('fmx_pano_history'),
            ],
            'crowns' => [
                'frequency' => $request->input('crowns_frequency'),
                'history' => $request->input('crowns_history'),
            ],
            'dentures' => [
                'frequency' => $request->input('dentures_frequency'),
                'history' => $request->input('dentures_history'),
            ],
            'nightguard' => [
                'frequency' => $request->input('nightguard_frequency'),
                'history' => $request->input('nightguard_history'),
            ],
            'perio_srp' => [
                'frequency' => $request->input('perio_srp_frequency'),
                'history' => $request->input('perio_srp_history'),
            ],
            'perio_maintenance' => [
                'frequency' => $request->input('perio_maintenance_frequency'),
                'history' => $request->input('perio_maintenance_history'),
            ],
            'd4381' => [
                'frequency' => $request->input('d4381_frequency'),
                'history' => $request->input('d4381_history'),
            ]
        ];

        $fluorideSealantsData = [
            'D1208_D1206' => [
                'frequency' => $request->input('D1208_D1206_frequency'),
                'history' => $request->input('D1208_D1206_history'),
                'age_limit' => $request->input('D1208_D1206_age_limit'),
            ],
            'D1351' => [
                'frequency' => $request->input('D1351_frequency'),
                'history' => $request->input('D1351_history'),
                'age_limit' => $request->input('D1351_age_limit'),
            ],
        ];
        // echo "<pre>"; print_r($fluorideSealantsData); die;
        // Store eligibility data
        $eligibility = Eligibility::create([
            'patient_id' => $validated['patient_id'],
            'policy_holder_name' => $request->input('policy_holder_name'),
            'policy_holder_dob' => $request->input('policy_holder_dob') ? Carbon::createFromFormat('m/d/Y', $request->input('policy_holder_dob'))->format('Y-m-d') : null,
            'insurance_name' => $validated['insurance_name'],
            'network_status' => $validated['network_status'],
            'member_id' => $request->input('member_id'),
            'group_name' => $request->input('group_name'),
            'group_number' => $request->input('group_number'),
            'effective_date' => $request->input('effective_date'),
            'claims_filing_limit' => $request->input('claims_filing_limit'),
            'life_time' => $request->input('life_time'),
            'waiting_period' => $request->input('waiting_period'),
            'missing_tooth_clause' => $request->input('missing_tooth_clause'),
            'ortho_maximum' => $request->input('ortho_maximum'),
            'ortho_remaining_maximum' => $request->input('ortho_remaining_maximum'),
            'ortho_age_limit' => $request->input('ortho_age_limit'),
            'annual_maximum' => $request->input('annual_maximum'),
            'remaining_maximum' => $request->input('remaining_maximum'),
            'plan_year' => $request->input('plan_year'),
            'deductible_individual' => $request->input('deductible_individual'),
            'deductible_family' => $request->input('deductible_family'),
            'deductible_ortho' => $request->input('deductible_ortho'),
            'deductible_remain_individual' => $request->input('deductible_remain_individual'),
            'deductible_remain_family' => $request->input('deductible_remain_family'),
            'deductible_remain_ortho' => $request->input('deductible_remain_ortho'),
            'deductible_applies_to' => $request->input('deductible_applies_to'),
            'preventive_waived' => $request->input('preventive_waived'),
            'exam_data' => json_encode($examData), // Convert array to JSON
            'fluoride_sealants_data' => json_encode($fluorideSealantsData), // Convert array to JSON

            'coverage_data' => json_encode($request->input('coverage_data')),
            'required_preauth' => json_encode($request->input('required_preauth')),
            

            'date' => Carbon::now(),
            'verified_by' => $request->input('verified_by'),
            'insurance_rep_name' => $request->input('insurance_rep_name'),
            'insurance_reference_number' => $request->input('insurance_reference_number'),
            'additional_notes' => $request->input('additional_notes'),
        ]);

        // Return a response, or redirect after successful storage
        return redirect()->route('eligibilities.index')->with('success', 'Eligibility data saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eligibility = Eligibility::findOrFail($id);
        $patient = Patient::findOrFail($eligibility->patient_id);
        $examData = json_decode($eligibility->exam_data, true) ?? [];
        $coverageData = json_decode($eligibility->coverage_data, true) ?? [];
        $fluorideSealantsData = json_decode($eligibility->fluoride_sealants_data, true) ?? [];
        return view('eligibilities.edit', compact('eligibility', 'patient', 'examData', 'coverageData', 'fluorideSealantsData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
