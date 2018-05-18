<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabrica extends Model
{
    protected $table = "fabrica";
    protected $fillable = [
        'titulo', 'contenido', 'titulo2', 'contenido2', 'imagen'
    ];
}
