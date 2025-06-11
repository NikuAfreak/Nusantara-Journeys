<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'package_id',
        'package_name',
        'package_price',
        'reference_number',
        'amount',
        'status'
    ];
}
