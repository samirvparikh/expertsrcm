<?php

namespace App\Exports;

use App\Models\Eligibility;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EligibilityExport implements FromView
{
    protected $patientId;

    public function __construct($patientId)
    {
        $this->patientId = $patientId;
    }

    

    public function view(): View
    {

        return view('eligibilities.export', [
            'eligibilities' => Eligibility::with('patient')->where('patient_id', $this->patientId)->get()
        ]);
    }

}
