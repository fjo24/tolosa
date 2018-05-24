<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgtipo extends Model
{
    protected $table = "img_tipo";
    protected $fillable = [
        'ubicacion', 'tipo_id'
    ];
}
