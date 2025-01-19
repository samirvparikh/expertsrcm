<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'age',
        'gender',
        'email',
        'cell_phone',
        'responsible_party',
        'primary_dentist',
        'preferred_clinic',
        'fee_schedule',
    ];
}
