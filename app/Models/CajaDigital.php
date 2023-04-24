<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajaDigital extends Model
{
    use HasFactory;

    protected $table = 'cajaDigital';

    public $timestamps = false;

    public $primaryKey = 'idCaja';
}
