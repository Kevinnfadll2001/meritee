<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'pickup_location',
        'dropoff_location',
        'passenger_name',
        'first_name',
        'last_name',
        'phone_number',
        'level_of_service',
        'pickup_date',
    ];
}
