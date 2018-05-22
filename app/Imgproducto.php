<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgproducto extends Model
{
    protected $table = "img_productos";
    protected $fillable = [
        'nombre', 'ubicacion', 'producto_id'
    ];
}
