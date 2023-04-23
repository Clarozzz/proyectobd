<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpuestoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'impuestoEmpleado';

    public $timestamps = false;

    public $primaryKey = 'idImpEmp';
}
