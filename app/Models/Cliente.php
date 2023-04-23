<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


    protected $table = 'cliente';
    public $primaryKey = 'idCliente';
    public $timestamps = false;

    protected $fillable = [
        'nombreUsuario',
        'esExonerado',
        'idPersona',
    ];

    public function persona()
    {
        return $this->belongsTo(User::class,  'idPersona', 'idPersona');
    }


}
