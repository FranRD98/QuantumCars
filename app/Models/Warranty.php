<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type', 'price', 'duration_months', 'km_limit'
    ];
}


