<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgtipo extends Model
{
    protected $table = "img_tipo";
    protected $fillable = [
        'ubicacion', 'tipos_ventana_id'
    ];

    public function tipoventana()
    {
    return $this->belongsTo('App\Tipoventana');
    }
}