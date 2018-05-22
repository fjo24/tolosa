<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgvidrio extends Model
{
    protected $table = "img_vidrio";
    protected $fillable = [
        'nombre', 'ubicacion', 'vidrio_id'
    ];
}
