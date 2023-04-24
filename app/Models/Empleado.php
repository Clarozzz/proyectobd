<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    public $timestamps = false;

    public $primaryKey = 'idEmpleado';

    

    protected $fillable = [
        'activo',
        'idContrato',
        'idSucursal',
        'idPersona',
        'idSalario'
    ];


    public function persona()
    {
        return $this->belongsTo(User::class,  'idPersona', 'idPersona');
    }

    public function permisoSistema()
    {
        return $this->hasOne(PermisoSistema::class,  'idEmpleado', 'idEmpleado');
    }
}
