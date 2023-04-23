<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValorImpuesto extends Model
{
    use HasFactory;

    protected $table = 'valorImpuesto';

    public $timestamps = false;

    public $primaryKey = 'idImpuesto';
}
