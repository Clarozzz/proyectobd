<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';

    public $timestamps = false;

    public $primaryKey = 'idVehiculo';

    public function motoristas(){
        return $this->belongsToMany('App\Models\Motorista');

    }
}
