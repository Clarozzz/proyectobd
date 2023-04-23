<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'catalogoEmpleado';

    public $timestamps = false;

    public $primaryKey = 'idPuesto';
}
