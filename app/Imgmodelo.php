<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgmodelo extends Model
{
    protected $table = "img_modelos";
    protected $fillable = [
        'ubicacion', 'modelo_id'
    ];

    public function modelo()
    {
    	return $this->belongsTo('App\Modelo');
    }
}
