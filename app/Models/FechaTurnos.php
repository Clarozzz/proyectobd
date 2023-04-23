<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FechaTurnos extends Model
{
    use HasFactory;

    protected $table = 'fechaTurnos';

    public $timestamps = false;

    public $primaryKey = 'idTurno';
}
