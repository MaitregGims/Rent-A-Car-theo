<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'vehicule';
    protected $fillable = [
        'id',
        'brand',
        'model',
        'year',
        'price_per_day',
        'doors',
        'fuel_type',
        'air_conditioning',
        'seats',
        'transmission',
        'vehicule_stype_id',
    ];

    public $timestamps = false;

}
