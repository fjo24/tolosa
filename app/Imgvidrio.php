<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgvidrio extends Model
{
    protected $table = "img_vidrio";
    protected $fillable = [
        'nombre', 'ubicacion', 'tipos_vidrio_id'
    ];

    public function vidrio()
    {
    return $this->belongsTo('App\Tipovidrio');
    }
}
