<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;

    protected $table = 'motorista';
    public $primaryKey = 'idMotorista';
    public $timestamps = false;

    protected $fillable = [
        'cuentaBancaria',
        'nombreBanco',
        'ubicacionActual',
        'idPersona',
    ];


    public function persona()
    {
        return $this->belongsTo(User::class,  'idPersona', 'idPersona');
    }


}
