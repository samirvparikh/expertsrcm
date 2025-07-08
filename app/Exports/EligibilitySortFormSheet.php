<?php

namespace App\Exports;

use App\Models\Eligibility;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Style;

class EligibilitySortFormSheet implements FromView, WithColumnWidths, WithStyles
{
    protected $patientId;

    public function __construct($patientId)
    {
        $this->patientId = $patientId;
    }

    // ✅ Set column width (first column "A" to 20 width)
    public function columnWidths(): array
    {
        return [
            'A' => 40, // Set width of first column
            'B' => 30, // Set width of first column
            'C' => 30, // Set width of first column
            'D' => 30, // Set width of first column
        ];
    }

    // ✅ Apply Borders to All Rows & Columns
    public function styles(Worksheet $sheet)
    {
        // Get the last row and column dynamically
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        // dd($highestRow, $highestColumn);
        $cellRange = 'A1:' . $highestColumn . $highestRow;
        // dd($cellRange);

        // Apply border style
        $sheet->getStyle($cellRange)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN, // Thin border
                    'color' => ['rgb' => '000000'], // Black color
                ],
            ],
        ]);
    }

    public function view(): View
    {

        return view('eligibilities.export', [
            'eligibilities' => Eligibility::with('patient')->where('patient_id', $this->patientId)->get()
        ]);
    }

}
