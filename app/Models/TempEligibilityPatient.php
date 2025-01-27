<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempEligibilityPatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'appt_date',
        'appt_time',
        'full_name',
        'date_of_birth',
        'hoh_full_name',
        'prim_subscriber',
        'prim_carrier_name',
        'prim_subscriber_id',
        'sec_carrier_name',
        'sec_subscriber_id',
        'clinic',
    ];
}
