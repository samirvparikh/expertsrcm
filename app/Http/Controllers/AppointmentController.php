<?php

namespace App\Http\Controllers;

use App\Models\EligibilityPatient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index($date = null)
    {
        $date = $date ?? Carbon::today()->toDateString();
        
        $eligibilities = EligibilityPatient::leftJoin('eligibilities as e', function ($join) {
            $join->on('eligibility_patients.patient_id', '=', 'e.patient_id')
                ->on('eligibility_patients.primary_insurance_id', '=', 'e.insurance_id');
        })
        ->where('eligibility_patients.appt_date', $date)
        ->get(['eligibility_patients.*', 'e.id', 'e.is_eligible','e.verified_by','e.verified_date']);

        return view('appointments.index', compact('eligibilities', 'date'));
    }
}
