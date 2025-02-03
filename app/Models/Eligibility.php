<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model
{
    use HasFactory;

    protected $table = 'eligibilities'; // Specify the table name (optional if it's plural of the model name)

    // The attributes that are mass assignable.
    protected $fillable = [
        'patient_id',
        'policy_holder_name',
        'policy_holder_dob',
        'insurance_name',
        'network_status',
        'member_id',
        'group_name',
        'group_number',
        'effective_date',
        'claims_filing_limit',
        'life_time',
        'waiting_period',
        'missing_tooth_clause',
        'ortho_maximum',
        'ortho_remaining_maximum',
        'ortho_age_limit',
        'annual_maximum',
        'remaining_maximum',
        'plan_year',
        'deductible_individual',
        'deductible_family',
        'deductible_ortho',
        'deductible_remain_individual',
        'deductible_remain_family',
        'deductible_remain_ortho',
        'deductible_applies_to',
        'preventive_waived',
        'exam_data',
        'required_preauth',
        'coverage_percentages',
        'diagnostic_xray',
        'preventive',
        'oral_facial_images',
        'basic_restorative',
        'major_restorative_d2950',
        'major_restorative_d2740',
        'endo',
        'perio_d4341',
        'perio_d4346',
        'perio_d4381',
        'oral_surgery',
        'bonegraft',
        'prostho',
        'implants',
        'ortho',
        'nightguard',
        'extraction',
        'crown',
        'rct',
        'periodontal',
        'denture',
        'exam_codes',
        'cleaning_codes',
        'xray_codes',
        'fluoride_sealants_data',
        'date',
        'verified_by',
        'insurance_rep_name',
        'insurance_reference_number',
        'additional_notes',
    ];

    // Casting JSON columns to arrays
    protected $casts = [
        'deductible_individual' => 'array',
        'deductible_family' => 'array',
        'deductible_ortho' => 'array',
        'deductible_remain_individual' => 'array',
        'deductible_remain_family' => 'array',
        'deductible_remain_ortho' => 'array',
        'exam_data' => 'array',
        'required_preauth' => 'array',
        'coverage_percentages' => 'array',
        'fluoride_sealants_data' => 'array',  // Convert JSON to array
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    
}
