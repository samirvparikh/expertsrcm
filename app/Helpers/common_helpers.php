<?php
use Carbon\Carbon;

if (!function_exists('setDate')) {
    function ymdtomdy($value = null)
    {
        //DATE_SEPARATOR  Define in config\constants.php
        return date('m'.config('constants.DATE_SEPARATOR').'d'.config('constants.DATE_SEPARATOR').'Y', strtotime($value));
    }
}

if (!function_exists('setTimeFormat')) {
    function setTimeFormat($value = null)
    {
        return Carbon::createFromFormat('H:i:s', $value)->format('g:i A');
    }
}