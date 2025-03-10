<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'dob',
        'mobile',
        'home',
        'work',
        'fax',
        'ext',
        'role',
        'preferred_contact_method',
        'profile_photo',
        'status',
        'email_verified_at',
        'password_hint',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function offices()
    {
        return $this->belongsToMany(Office::class, 'office_user');
    }

    public function getNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getUserTypeAttribute($value)
    {
        return ucfirst($value); // Converts 'dentist' → 'Dentist'
        // return ucwords($value); // Converts 'dentist assistant' → 'Dentist Assistant'
    }

    public function getContactMethodAttribute($value)
    {
        return ucwords(str_replace('_', ' ', $value));
    }
}
