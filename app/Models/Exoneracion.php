<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exoneracion extends Model
{
    use HasFactory;

    protected $table = 'exoneracion';

    public $timestamps = false;

    public $primaryKey = 'idExoneracion';
}
