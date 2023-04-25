<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'color'
    ];


    protected $table = 'color';

    public $timestamps = false;

    public $primaryKey = 'idColor';

    
}
