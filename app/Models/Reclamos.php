<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamos extends Model
{
    use HasFactory;

    protected $table = 'reclamos';

    public $timestamps = false;

    public $primaryKey = 'idReclamo';
}
