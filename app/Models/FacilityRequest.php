<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityRequest extends Model
{

    protected $fillable = [
        'facility_name',
        'contact_name',
        'phone',
        'email',
        'monthly_volume',
        'preferred_services',
        'message'
    ];
}
