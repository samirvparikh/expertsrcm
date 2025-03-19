<?php 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    public function run()
    {
        $options = [
            // Deductibles
            ['category' => 'deductibles', 'key' => 'deductibles', 'value' => 'Deductibles'],
            ['category' => 'deductibles', 'key' => 'deductible_remain', 'value' => 'Deductible REMAIN'],

            // Required Preauth X-ray
            ['category' => 'required_preauth_xray', 'key' => 'extraction', 'value' => 'Extraction'],
            ['category' => 'required_preauth_xray', 'key' => 'crown', 'value' => 'Crown'],
            ['category' => 'required_preauth_xray', 'key' => 'rct', 'value' => 'RCT'],
            ['category' => 'required_preauth_xray', 'key' => 'periodontal', 'value' => 'Periodontal'],
            ['category' => 'required_preauth_xray', 'key' => 'denture', 'value' => 'Denture'],

            // Coverage
            ['category' => 'coverage', 'key' => 'diagnostic_xray', 'value' => 'Diagnostic - X-RAY'],
            ['category' => 'coverage', 'key' => 'preventive', 'value' => 'Preventive'],
            ['category' => 'coverage', 'key' => 'oral_facial_images', 'value' => 'Oral / Facial photographic images - D0350'],
            ['category' => 'coverage', 'key' => 'basic_restorative', 'value' => 'Basic Restorative - D2391/Downgrade'],
            ['category' => 'coverage', 'key' => 'major_restorative_d2950', 'value' => 'Major Restorative - D2950'],
            ['category' => 'coverage', 'key' => 'major_restorative_d2740', 'value' => 'Major Restorative - D2740/Downgrade'],
            ['category' => 'coverage', 'key' => 'endo', 'value' => 'Endo - D3310'],
            ['category' => 'coverage', 'key' => 'perio_d4341', 'value' => 'Perio - D4341'],
            ['category' => 'coverage', 'key' => 'perio_d4346', 'value' => 'Perio - D4346'],
            ['category' => 'coverage', 'key' => 'perio_d4381', 'value' => 'Perio - D4381'],
            ['category' => 'coverage', 'key' => 'oral_surgery', 'value' => 'Oral & Maxillofacial Surgery - D7210'],
            ['category' => 'coverage', 'key' => 'bonegraft', 'value' => 'Bonegraft - D7953'],
            ['category' => 'coverage', 'key' => 'prostho', 'value' => 'Prostho - D5110'],
            ['category' => 'coverage', 'key' => 'implants', 'value' => 'Implants - D6010'],
            ['category' => 'coverage', 'key' => 'ortho', 'value' => 'Ortho - D8090'],
            ['category' => 'coverage', 'key' => 'nightguard', 'value' => 'Nightguard - D9944'],

            // Exam Data
            ['category' => 'exam_data', 'key' => 'periodic_exam', 'value' => 'Periodic Exam - D0120'],
            ['category' => 'exam_data', 'key' => 'comp_exam', 'value' => 'Comp. Exam - D0150'],
            ['category' => 'exam_data', 'key' => 'consultation', 'value' => 'Consultation - D9310'],
            ['category' => 'exam_data', 'key' => 'fac_photographic', 'value' => 'Fac. photographic images - D0350'],
            ['category' => 'exam_data', 'key' => 'prophy', 'value' => 'Prophy - D1110, D1120'],
            ['category' => 'exam_data', 'key' => 'bw', 'value' => 'BW - D0274'],
            ['category' => 'exam_data', 'key' => 'fmx_pano', 'value' => 'FMX & Pano - D0210 & D0330'],
            ['category' => 'exam_data', 'key' => 'crowns', 'value' => 'Crowns - D2740'],
            ['category' => 'exam_data', 'key' => 'dentures', 'value' => 'Dentures - D5110'],
            ['category' => 'exam_data', 'key' => 'nightguard', 'value' => 'Nightguard - D9944'],
            ['category' => 'exam_data', 'key' => 'perio_srp', 'value' => 'Perio SRP - D4341'],
            ['category' => 'exam_data', 'key' => 'perio_maintenance', 'value' => 'Perio Maintenance - D4910'],
            ['category' => 'exam_data', 'key' => 'd4381', 'value' => 'D4381'],

            // Share History
            ['category' => 'share_history', 'key' => 'exam_codes', 'value' => 'D0150/D0120/D0140/D9310'],
            ['category' => 'share_history', 'key' => 'cleaning_codes', 'value' => 'D1110/D4910'],
            ['category' => 'share_history', 'key' => 'xray_codes', 'value' => 'D0210/D0330'],

            // Fluoride Sealants
            ['category' => 'fluoride_sealants', 'key' => 'fluoride', 'value' => 'D1208, D1206'],
            ['category' => 'fluoride_sealants', 'key' => 'sealant', 'value' => 'D1351'],

            // Options (Yes/No)
            ['category' => 'options', 'key' => 'Yes', 'value' => 'Yes'],
            ['category' => 'options', 'key' => 'No', 'value' => 'No'],

            // Group Name (Yes/No)
            ['category' => 'role_group_name', 'key' => 'User', 'value' => 'User'],
            ['category' => 'role_group_name', 'key' => 'Patient', 'value' => 'Patient'],
            ['category' => 'role_group_name', 'key' => 'Office', 'value' => 'Office'],
            ['category' => 'role_group_name', 'key' => 'Proiveder', 'value' => 'Proiveder'],
            ['category' => 'role_group_name', 'key' => 'Eligibility', 'value' => 'Eligibility'],
        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
