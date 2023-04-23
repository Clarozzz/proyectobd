<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPagoFactura extends Model
{
    use HasFactory;

    protected $table = 'tiposPagoFactura';

    public $timestamps = false;

    public $primaryKey = 'idTiposPago';
}
