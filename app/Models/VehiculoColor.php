<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoColor extends Model
{
    use HasFactory;

    protected $table = 'vehiculo_color';

    public $timestamps = false;

    public $primaryKey = 'idVehiculoColor';
}
