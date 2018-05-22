<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoventana extends Model
{
    protected $table = "tipos_ventana";
    protected $fillable = ['nombre', 'info'];
}
