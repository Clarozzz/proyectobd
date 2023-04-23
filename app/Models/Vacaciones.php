<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacaciones extends Model
{
    use HasFactory;

    protected $table = 'vacaciones';

    public $timestamps = false;

    public $primaryKey = 'idVacaciones';
}
