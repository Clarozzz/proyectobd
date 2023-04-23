<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotoristaVehiculo extends Model
{
    use HasFactory;

    protected $table = 'motorista_vehiculo';

    public $timestamps = false;

    public $primaryKey = 'idMotoristaVehiculo';
}
