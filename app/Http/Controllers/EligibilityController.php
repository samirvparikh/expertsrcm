<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Eligibility;
use App\Models\Insurance;

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

    public function form($patientId = null, $id = null)
    {
        $insurances = Insurance::all(); // Fetch all insurance companies
        if ($id) {
            // Editing existing eligibility
            $eligibility = Eligibility::findOrFail($id);
            $patient = Patient::findOrFail($eligibility->patient_id);
            $deductiblesData = json_decode($eligibility->deductibles_data, true) ?? [];
            $examData = json_decode($eligibility->exam_data, true) ?? [];
            $coverageData = json_decode($eligibility->coverage_data, true) ?? [];
            $fluorideSealantsData = json_decode($eligibility->fluoride_sealants_data, true) ?? [];
        } else {
            // Creating new eligibility
            $eligibility = null;
            $patient = Patient::findOrFail($patientId);
            $deductiblesData = [];
            $examData = [];
            $coverageData = [];
            $fluorideSealantsData = [];
        }

        return view('eligibilities.form', compact('eligibility', 'patient', 'deductiblesData', 'examData', 'coverageData', 'fluorideSealantsData', 'insurances'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id = null)
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

        $deductiblesData = [
            'deductibles' => [
                'individual' => $request->input('deductibles_individual'),
                'family' => $request->input('deductibles_family'),
                'ortho' => $request->input('deductibles_ortho'),
            ],
            'deductible_remain' => [
                'individual' => $request->input('deductible_remain_individual'),
                'family' => $request->input('deductible_remain_family'),
                'ortho' => $request->input('deductible_remain_ortho'),
            ],
        ];

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

        $CoverageData = [
            'diagnostic_xray' => $request->input('diagnostic_xray'),
            'preventive' => $request->input('preventive'),
            'oral_facial_images' => $request->input('oral_facial_images'),
            'basic_restorative' => $request->input('basic_restorative'),
            'major_restorative_d2950' => $request->input('major_restorative_d2950'),
            'major_restorative_d2740' => $request->input('major_restorative_d2740'),
            'endo' => $request->input('endo'),
            'perio_d4341' => $request->input('perio_d4341'),
            'perio_d4346' => $request->input('perio_d4346'),
            'perio_d4381' => $request->input('perio_d4381'),
            'oral_surgery' => $request->input('oral_surgery'),
            'bonegraft' => $request->input('bonegraft'),
            'prostho' => $request->input('prostho'),
            'implants' => $request->input('implants'),
            'ortho' => $request->input('ortho'),
            'nightguard' => $request->input('nightguard'),
        ];

        if ($id) {
            // Update existing eligibility record
            $eligibility = Eligibility::findOrFail($id);
            $message = "Eligibility details updated successfully!";
        } else {
            // Create new eligibility record
            $eligibility = new Eligibility();
            $message = "Eligibility details created successfully!";
        }

        $eligibility->patient_id = $validated['patient_id'];
        $eligibility->policy_holder_name = $request->input('policy_holder_name');
        $eligibility->policy_holder_dob = $request->input('policy_holder_dob') ? Carbon::createFromFormat('m/d/Y', $request->input('policy_holder_dob'))->format('Y-m-d') : null;
        $eligibility->insurance_name = $validated['insurance_name'];
        $eligibility->network_status = $validated['network_status'];
        $eligibility->member_id = $request->input('member_id');
        $eligibility->group_name = $request->input('group_name');
        $eligibility->group_number = $request->input('group_number');
        $eligibility->effective_date = $request->input('effective_date') ? Carbon::createFromFormat('m/d/Y', $request->input('effective_date'))->format('Y-m-d') : null;
        $eligibility->claims_filing_limit = $request->input('claims_filing_limit');
        $eligibility->life_time = $request->input('life_time');
        $eligibility->waiting_period = $request->input('waiting_period');
        $eligibility->missing_tooth_clause = $request->input('missing_tooth_clause');
        $eligibility->ortho_maximum = $request->input('ortho_maximum');
        $eligibility->ortho_remaining_maximum = $request->input('ortho_remaining_maximum');
        $eligibility->ortho_age_limit = $request->input('ortho_age_limit');
        $eligibility->annual_maximum = $request->input('annual_maximum');
        $eligibility->remaining_maximum = $request->input('remaining_maximum');
        $eligibility->plan_year = $request->input('plan_year');
        $eligibility->deductible_applies_to = $request->input('deductible_applies_to');
        $eligibility->preventive_waived = $request->input('preventive_waived');
        $eligibility->deductibles_data = json_encode($deductiblesData); // Convert array to JSON;
        $eligibility->exam_data = json_encode($examData); // Convert array to JSO;
        $eligibility->fluoride_sealants_data = json_encode($fluorideSealantsData); // Convert array to JSON;
        $eligibility->coverage_data = json_encode($CoverageData);
        $eligibility->verified_date = Carbon::now();
        $eligibility->verified_by = $request->input('verified_by');
        $eligibility->insurance_rep_name = $request->input('insurance_rep_name');
        $eligibility->insurance_reference_number = $request->input('insurance_reference_number');
        $eligibility->additional_notes = $request->input('additional_notes');
        $eligibility->save();

        // Return a response, or redirect after successful storage
        return redirect()->route('eligibilities.index')->with('success', $message);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eligibility = Eligibility::findOrFail($id);
        $patient = Patient::findOrFail($eligibility->patient_id);
        $deductiblesData = json_decode($eligibility->deductibles_data, true) ?? [];
        $examData = json_decode($eligibility->exam_data, true) ?? [];
        $coverageData = json_decode($eligibility->coverage_data, true) ?? [];
        $fluorideSealantsData = json_decode($eligibility->fluoride_sealants_data, true) ?? [];
        // dd($examData);
        return view('eligibilities.edit', compact('eligibility', 'patient', 'deductiblesData','examData', 'coverageData', 'fluorideSealantsData'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
