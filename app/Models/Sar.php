<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sar extends Model
{
    use HasFactory;

    protected $table = 'sar';

    public $timestamps = false;

    public $primaryKey = 'idInscripcion';
}
