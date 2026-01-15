<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    use HasFactory;

    protected $fillable = [
    'first_name',
    'last_name',
    'gender',
    'age',
    'email',
    'phone',
    'education_level',
    'last_school',
    'address',
    'street_address',
    'city',
    'resume',
    'voice_recording',
];

}
