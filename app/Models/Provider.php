<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'dob', 'age', 'gender', 
        'email', 'cell_phone', 'created_by', 'updated_by'
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }

    // If you're using Laravel's default User model
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
