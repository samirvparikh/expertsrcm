<?php

namespace App\Imports;

use App\Models\TempEligibilityPatient;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EligibilityPatientImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // dd($row);
        // Ensure valid date parsing
        $dob = $row['date_of_birth'];
        if (is_numeric($dob)) {
            $dob = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($dob)->format('Y-m-d');
        } else {
            $dob = \Carbon\Carbon::parse($dob)->format('Y-m-d');
            // $dob = \Carbon\Carbon::createFromFormat('Y-m-d', $dob);
        }

        $appt_date = $row['appt_date'];
        if (is_numeric($appt_date)) {
            $appt_date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($appt_date)->format('Y-m-d');
        } else {
            $appt_date = \Carbon\Carbon::parse($appt_date)->format('Y-m-d');
            // $appt_date = \Carbgon\Carbon::createFromFormat('Y-m-d', $appt_date);
        }

        return new TempEligibilityPatient([
            'clinic' => $row['clinic'],
            'appt_provider' => $row['appt_provider'],
            'appt_date' => $appt_date,
            'appt_time' => $row['appt_time'],
            'full_name' => $row['full_name'] ?? '',
            'date_of_birth' => $dob,
            'prim_subscriber' => $row['prim_subscriber'] ?? '',
            'prim_carrier_name' => $row['prim_carrier_name'] ?? '',
            'prim_subscriber_id' => $row['prim_subscriber_id'] ?? '',
            'sec_carrier_name' => $row['sec_carrier_name'] ?? '',
            'sec_subscriber_id' => $row['sec_subscriber_id'] ?? '',
            
            
        ]);
    }
}
