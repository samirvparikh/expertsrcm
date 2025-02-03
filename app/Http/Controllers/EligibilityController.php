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
        $patients = Patient::all();
        return view('eligibilities.create', compact('patient', 'patients', 'patientId'));
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
            // 'fluoride_sealants_data' => 'nullable|json',
            // Add validation rules for other fields as needed
        ]);

        // Store eligibility data
        $eligibility = Eligibility::create([
            'patient_id' => $validated['patient_id'],
            'policy_holder_name' => $request->input('policy_holder_name'),
            'policy_holder_dob' => $request->input('policy_holder_dob'),
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
            'deductible_individual' => json_encode($request->input('deductible_individual')),
            'deductible_family' => json_encode($request->input('deductible_family')),
            'deductible_ortho' => json_encode($request->input('deductible_ortho')),
            'deductible_remain_individual' => json_encode($request->input('deductible_remain_individual')),
            'deductible_remain_family' => json_encode($request->input('deductible_remain_family')),
            'deductible_remain_ortho' => json_encode($request->input('deductible_remain_ortho')),
            'deductible_applies_to' => $request->input('deductible_applies_to'),
            'preventive_waived' => $request->input('preventive_waived'),
            'exam_data' => json_encode($request->input('exam_data')),
            'required_preauth' => json_encode($request->input('required_preauth')),
            'coverage_percentages' => json_encode($request->input('coverage_percentages')),
            'fluoride_sealants_data' => json_encode($request->input('fluoride_sealants_data')),
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
        return view('eligibilities.edit', compact('eligibility', 'patient'));
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
