<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenidoempresa extends Model
{
   	protected $table = "cont_empresas";
    protected $fillable = [
    	'imagen', 'titulo', 'contenido','contenido2'
    ];
}
