<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'city',
        'address',
        'cart',
        'total'
    ];

    protected $casts = [
        'cart' => 'array',
    ];
}
