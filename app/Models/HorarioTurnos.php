<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioTurnos extends Model
{
    use HasFactory;

    protected $table = 'horarioTurnos';

    public $timestamps = false;

    public $primaryKey = 'idHorario';
}
