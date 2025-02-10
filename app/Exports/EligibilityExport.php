<?php

namespace App\Exports;

use App\Models\Eligibility;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EligibilityExport implements FromArray, WithHeadings, WithStyles
{
    protected $patientId;

    public function __construct($patientId)
    {
        $this->patientId = $patientId;
    }

    public function array(): array
    {
        // $eligibilities = Eligibility::with('patient')->get();
        // Fetch eligibility data
        $eligibilities = Eligibility::with('insurance', 'patient')
            ->where('patient_id', $this->patientId)
            ->get();

        $data = [];

        foreach ($eligibilities as $eligibility) {
            $data[] = [
                ['', 'Sunnyvale Dental Care'], // Header with merged cell
                ['Patient Name', $eligibility->patient->name ?? ''],
                ['Patient DOB', $eligibility->patient->dob ?? ''],
                ['Policy Holder Name', $eligibility->policy_holder_name ?? ''],
                ['Policy Holder DOB', $eligibility->policy_holder_dob ?? ''],
                ['', 'Insurance Details'],
                ['Insurance Name', $eligibility->insurance->name ?? ''],
                ['In Network / Out of Network', $eligibility->network_status ?? ''],
                ['Member ID', $eligibility->member_id ?? ''],
                ['Group Name', $eligibility->group_name ?? ''],
                ['Group Number', $eligibility->group_number ?? ''],
                ['Effective Date', $eligibility->effective_date ?? ''],
                ['Claims Filling Limit', $eligibility->claims_filling_limit ?? ''],
                ['Life Time', $eligibility->life_time ?? ''],
                ['Waiting Period', $eligibility->waiting_period ?? ''],
                ['Missing Tooth Clause', $eligibility->missing_tooth_clause ?? ''],
                ['Ortho Maximum', $eligibility->ortho_maximum ?? ''],
                ['Ortho Remaining Maximum', $eligibility->ortho_remaining_maximum ?? ''],
                ['Ortho Age Limit', $eligibility->ortho_age_limit ?? ''],
                ['Annual Maximum', $eligibility->annual_maximum ?? ''],
                ['Remaining Maximum', $eligibility->remaining_maximum ?? ''],
                ['Plan Year', $eligibility->plan_year ?? ''],
                ['', 'Deductibles'],
                ['Deductibles', 'Individual', 'Family', 'Ortho'],
                ['Deductible REMAIN', $eligibility->deductible_individual ?? '', $eligibility->deductible_family ?? '', $eligibility->deductible_ortho ?? ''],
                ['Preventive Waived', $eligibility->preventive_waived ?? ''],
                ['', 'Required Preauth/X-Rays'],
                ['Extraction', $eligibility->extraction ?? ''],
                ['Crown', $eligibility->crown ?? ''],
                ['RCT', $eligibility->rct ?? ''],
                ['Periodontal', $eligibility->periodontal ?? ''],
                ['Denture', $eligibility->denture ?? ''],
                ['Diagnostic X-RAY Coverage %', $eligibility->diagnostic_xray_coverage ?? ''],
            ];
        }

        return $data;
    }

    public function headings(): array
    {
        return [];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true, 'size' => 14], 'fill' => ['fillType' => 'solid', 'color' => ['rgb' => 'FFFF00']]],
            6 => ['font' => ['bold' => true, 'size' => 12], 'fill' => ['fillType' => 'solid', 'color' => ['rgb' => '00FFFF']]],
            23 => ['font' => ['bold' => true], 'fill' => ['fillType' => 'solid', 'color' => ['rgb' => 'FFFF00']]],
            28 => ['font' => ['bold' => true], 'fill' => ['fillType' => 'solid', 'color' => ['rgb' => '00FFFF']]],
        ];
    }
}
