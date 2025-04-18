<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    protected $table = 'vehicule_type';

    public $timestamps = false;

    public function cars()
    {
        return $this->hasMany(Car::class, 'vehicule_type_id');
    }

}
