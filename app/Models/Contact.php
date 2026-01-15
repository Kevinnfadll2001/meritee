<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'pickup_address',
        'destination_address',
        'service_area',   // <-- NEW
        'service_type',
        'date',
        'time',
        'notes',
    ];
}
