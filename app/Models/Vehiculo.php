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


    protected $fillable = [
        'idVehiculo',
    'numeroPlaca',
	'foto',
	'tipo',
	'anio',
	'marca',
	'permisoExplitacion',
	'porcentajeComision'
    ];

    

    public function motoristas(){
        return $this->belongsToMany('App\Models\Motorista');

    }


    public function colores(){
        return $this->belongsToMany(Color::class, 'vehiculo_color', 'idVehiculo', 'idColor');
    }

    

    

}
