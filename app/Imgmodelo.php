<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgmodelo extends Model
{
    protected $table = "img_modelos";
    protected $fillable = [
        'nombre', 'ubicacion', 'modelo_id'
    ];
}
