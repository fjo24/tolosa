<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgproducto extends Model
{
    protected $table = "img_producto";
    protected $fillable = [
         'ubicacion', 'producto_id'
    ];
}
