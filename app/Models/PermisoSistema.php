<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisoSistema extends Model
{
    use HasFactory;

    protected $table = 'permisoSistema';

    public $timestamps = false;

    public $primaryKey = 'idPermisoSis';


    
    protected $fillable = [
        'nivelPermiso',
        'descripcion',
        'idEmpleado',
    ];


    public function empleado(){
        return $this->belongsTo(Empleado::class,  'idEmpleado', 'idEmpleado');        
    }
    
}
