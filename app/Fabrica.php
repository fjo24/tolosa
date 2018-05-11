<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabrica extends Model
{
    protected $table = "fabrica";
    protected $fillable = [
        'titulo', 'descripcion'
    ];
}
