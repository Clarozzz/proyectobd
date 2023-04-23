<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'persona';
    protected $primaryKey = 'idPersona';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'primerNombre',
        'primerApellido',
        'segundoNombre',
        'segundoApellido',
        'telefono',
        'dni',
        'rtn',
        'fechaNacimiento',
        'email',
        'password',
        'fechaAlta',
        'nombreEmpresa',
        'estaActivo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'idPersona' , 'idPersona');        
    }

    public function motorista()
    {
        return $this->hasOne(Motorista::class, 'idPersona' , 'idPersona');        
    }
 
}
