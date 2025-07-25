<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Eligibility;
use App\Models\EligibilityGroupNumberData;
use App\Models\EligibilityHistory;
use App\Models\EligibilityPatient;
use App\Exports\EligibilityExport;
use App\Exports\EligibilityExportMultipleSheet;
use App\Models\Insurance;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class EligibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$eligibilities = EligibilityPatient::orderBy('id')->get();
        foreach ($eligibilities as $eligibility) {
            // Check if there is a corresponding Eligibility record with the same patient_id and insurance_id
            $eligibility->has_eligibility = Eligibility::where('patient_id', $eligibility->patient_id)
                ->where('insurance_id', $eligibility->primary_insurance_id)
                ->exists();
        }*/
        
        $eligibilities = EligibilityPatient::leftJoin('eligibilities as e', function ($join) {
            $join->on('eligibility_patients.patient_id', '=', 'e.patient_id')
                 ->on('eligibility_patients.primary_insurance_id', '=', 'e.insurance_id');
        })
        ->get(['eligibility_patients.*', 'e.id', 'e.is_eligible','e.verified_by','e.verified_date']);
        // dd($eligibilityPatients);

        $displayLength = 50;

        return view('eligibilities.index', compact('eligibilities','displayLength'));
    }

    public function form($patientId = null, $insuranceId = null)
    {
        $patient = Patient::findOrFail($patientId); // This will throw an error if the patient doesn't exist
        $eligibility = Eligibility::where('patient_id', $patientId)->first();
        if ($eligibility) {
            $deductiblesData = json_decode($eligibility->deductibles_data, true) ?? [];
            $examData = json_decode($eligibility->exam_data, true) ?? [];
            $coverageData = json_decode($eligibility->coverage_data, true) ?? [];
            $requiredPreauthXrayData = json_decode($eligibility->required_preauth_xray_data, true) ?? [];
            $shareHistoryData = json_decode($eligibility->share_history_data, true) ?? [];
            $fluorideSealantsData = json_decode($eligibility->fluoride_sealants_data, true) ?? [];
        } else {
            // Handle the case where no eligibility record exists
            $deductiblesData = [];
            $examData = [];
            $coverageData = [];
            $requiredPreauthXrayData = [];
            $shareHistoryData = [];
            $fluorideSealantsData = [];
        }
        $insurances = Insurance::all(); // Fetch all insurance companies
        return view('eligibilities.form', compact('eligibility', 'patient', 'insuranceId','deductiblesData', 'examData', 'coverageData', 'shareHistoryData', 'fluorideSealantsData', 'requiredPreauthXrayData','insurances'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'insurance_id' => 'required|exists:insurances,id',
            'policy_holder_name' => 'required|string|max:255',
            'policy_holder_dob' => 'required|date',
            'network_status' => 'required|string|max:255',

            'group_number' => 'required|string|max:255',
            'group_name' => 'required|string|max:255',

            'coverage_data' => 'array', // Ensure data is an array
            'coverage_data.*' => 'nullable|string|max:255', // Validate each field
            // 'fluoride_sealants_data' => 'nullable|json',
            // Add validation rules for other fields as needed
        ], [
            'insurance_id.required' => 'The insurance name field is required.', // Custom error message
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

        $coverageData = [
            'diagnostic_xray' => ['coverage' => $request->input('diagnostic_xray'),'remarks' => ''],
            'preventive' => ['coverage' => $request->input('preventive'),'remarks' => ''],
            'oral_facial_images' => ['coverage' => $request->input('oral_facial_images'),'remarks' => ''],
            'basic_restorative' => ['coverage' => $request->input('basic_restorative'),'remarks' => $request->input('basic_restorative_ramarks')],
            'major_restorative_d2950' => ['coverage' => $request->input('major_restorative_d2950'),'remarks' => ''],
            'major_restorative_d2740' => ['coverage' => $request->input('major_restorative_d2740'),'remarks' => $request->input('major_restorative_d2740_ramarks')],
            'endo' => ['coverage' => $request->input('endo'),'remarks' => ''],
            'perio_d4341' => ['coverage' => $request->input('perio_d4341'),'remarks' => ''],
            'perio_d4346' => ['coverage' => $request->input('perio_d4346'),'remarks' => ''],
            'perio_d4381' => ['coverage' => $request->input('perio_d4381'),'remarks' => ''],
            'oral_surgery' => ['coverage' => $request->input('oral_surgery'),'remarks' => ''],
            'bonegraft' => ['coverage' => $request->input('bonegraft'),'remarks' => ''],
            'prostho' => ['coverage' => $request->input('prostho'),'remarks' => ''],
            'implants' => ['coverage' => $request->input('implants'),'remarks' => ''],
            'ortho' => ['coverage' => $request->input('ortho'),'remarks' => ''],
            'nightguard' => ['coverage' => $request->input('nightguard'),'remarks' => ''],
        ];

        $requiredPreauthXrayData = [
            'extraction' => $request->input('extraction'),
            'crown' => $request->input('crown'),
            'rct' => $request->input('rct'),
            'periodontal' => $request->input('periodontal'),
            'denture' => $request->input('denture'),
        ];

        $shareHistoryData = [
            'exam_codes' => $request->input('exam_codes'),
            'cleaning_codes' => $request->input('cleaning_codes'),
            'xray_codes' => $request->input('xray_codes'),
        ];
        
        $fluorideSealantsData = [
            'fluoride' => [
                'frequency' => $request->input('fluoride_frequency'),
                'history' => $request->input('fluoride_history'),
                'age_limit' => $request->input('fluoride_age_limit'),
            ],
            'sealant' => [
                'frequency' => $request->input('sealant_frequency'),
                'history' => $request->input('sealant_history'),
                'age_limit' => $request->input('sealant_age_limit'),
            ],
        ];

        $insurance = Insurance::find($validated['insurance_id']);
        if (!$insurance) {
            return redirect()->back()->with('error', 'Invalid insurance ID.');
        }
        
        $eligibility = Eligibility::where('patient_id', $validated['patient_id'])->first();
        if ($eligibility) {
            // Store History Before Updating
            $this->storeEligibilityHistory($eligibility);
            $message = "Eligibility details updated successfully!";
        } else {
            // Create a new record
            $eligibility = new Eligibility();
            $message = "Eligibility details created successfully!";
        }

        $eligibility->patient_id = $validated['patient_id'];
        $eligibility->insurance_id = $validated['insurance_id'];
        $eligibility->is_eligible = $request->input('is_eligible');
        $eligibility->policy_holder_name = $request->input('policy_holder_name');
        $eligibility->policy_holder_dob = $request->input('policy_holder_dob') ? Carbon::createFromFormat('m/d/Y', $request->input('policy_holder_dob'))->format('Y-m-d') : null;
        $eligibility->insurance_name = $insurance->name;
        $eligibility->network_status = $validated['network_status'];
        $eligibility->member_id = $request->input('member_id');
        $eligibility->group_name = $request->input('group_name');
        $eligibility->group_number = $request->input('group_number');
        $eligibility->effective_date = $request->input('effective_date') ? Carbon::createFromFormat('m/d/Y', $request->input('effective_date'))->format('Y-m-d') : null;
        $eligibility->end_date = $request->input('end_date') ? Carbon::createFromFormat('m/d/Y', $request->input('end_date'))->format('Y-m-d') : null;
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
        $eligibility->coverage_data = json_encode($coverageData); // Convert array to JSON;
        $eligibility->required_preauth_xray_data = json_encode($requiredPreauthXrayData);
        $eligibility->share_history_data = json_encode($shareHistoryData);
        $eligibility->verified_date = Carbon::now();
        $eligibility->verified_by = $request->input('verified_by');
        $eligibility->insurance_rep_name = $request->input('insurance_rep_name');
        $eligibility->insurance_reference_number = $request->input('insurance_reference_number');
        $eligibility->additional_notes = $request->input('additional_notes');
        $eligibility->save();
        // dd($eligibility);
        $groupData = EligibilityGroupNumberData::updateOrCreate(
            ['group_number' => $validated['group_number']], 
            [
                'group_name' => $request->input('group_name'),
                'exam_data' => json_encode($examData), // Convert array to JSON;
                'coverage_data' => json_encode($coverageData), // Convert array to JSON;
            ]
        );

        // Return a response, or redirect after successful storage
        return redirect()->route('eligibilities.index')->with('success', $message);
    }

    /**
     * Store history of eligibility before update.
     */
    private function storeEligibilityHistory(Eligibility $eligibility)
    {
        EligibilityHistory::create([
            'eligibility_id' => $eligibility->id,
            'patient_id' => $eligibility->patient_id,
            'insurance_id' => $eligibility->insurance_id,
            'is_eligible' => $eligibility->is_eligible,
            'policy_holder_name' => $eligibility->policy_holder_name,
            'policy_holder_dob' => $eligibility->policy_holder_dob,
            'insurance_name' => $eligibility->insurance_name,
            'network_status' => $eligibility->network_status,
            'member_id' => $eligibility->member_id,
            'group_name' => $eligibility->group_name,
            'group_number' => $eligibility->group_number,
            'effective_date' => $eligibility->effective_date,
            'end_date' => $eligibility->end_date,
            'claims_filing_limit' => $eligibility->claims_filing_limit,
            'life_time' => $eligibility->life_time,
            'waiting_period' => $eligibility->waiting_period,
            'missing_tooth_clause' => $eligibility->missing_tooth_clause,
            'ortho_maximum' => $eligibility->ortho_maximum,
            'ortho_remaining_maximum' => $eligibility->ortho_remaining_maximum,
            'ortho_age_limit' => $eligibility->ortho_age_limit,
            'annual_maximum' => $eligibility->annual_maximum,
            'remaining_maximum' => $eligibility->remaining_maximum,
            'plan_year' => $eligibility->plan_year,        
            'deductible_applies_to' => $eligibility->deductible_applies_to,
            'preventive_waived' => $eligibility->preventive_waived,
            'deductibles_data' => $eligibility->deductibles_data,
            'exam_data' => $eligibility->exam_data,
            'coverage_data' => $eligibility->coverage_data,
            'required_preauth_xray_data' => $eligibility->required_preauth_xray_data,
            'fluoride_sealants_data' => $eligibility->fluoride_sealants_data,
            'share_history_data' => $eligibility->share_history_data,
            'verified_date' => $eligibility->verified_date,
            'verified_by' => $eligibility->verified_by,
            'insurance_rep_name' => $eligibility->insurance_rep_name,
            'insurance_reference_number' => $eligibility->insurance_reference_number,
            'additional_notes' => $eligibility->additional_notes,
        ]);
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
        $shareHistoryData = json_decode($eligibility->share_history_data, true) ?? [];
        // dd($examData);
        return view('eligibilities.edit', compact('eligibility', 'patient', 'deductiblesData','examData', 'coverageData', 'fluorideSealantsData'));
    }

    public function getGroupData(Request $request)
    {
        $groupNumber = $request->input('group_number');

        $groupData = EligibilityGroupNumberData::where('group_number', $groupNumber)->first();

        if ($groupData) {
            return response()->json([
                'success' => true,
                'data' => [
                    'group_name' => $groupData->group_name,
                    'examData' => $groupData->exam_data ?? [],
                    'coverageData' => $groupData->coverage_data ?? [],
                ]
            ]);
        } else {
            return response()->json(['success' => false, 'message' => 'No data found']);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function export($patientId)
    {
        $eligibilities = Eligibility::where('patient_id', $patientId)->get();
        return view('eligibilities.export', compact('eligibilities'));
    }

    public function exportExcel($patientId)
    {
        $patient = Patient::findOrFail($patientId);
        // return Excel::download(new EligibilityExport($patientId), 'Full_Form_' . $patientId . '_' . $patient->name. '_' . date('m-d-Y') . '.xlsx');
        return Excel::download(new EligibilityExportMultipleSheet($patientId), 'Full_Form_' . $patientId . '_' . $patient->name. '_' . date('m-d-Y') . '.xlsx');
    }

}
