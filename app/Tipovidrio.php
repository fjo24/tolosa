<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipovidrio extends Model
{
    protected $table = "tipos_vidrio";
    protected $fillable = ['nombre', 'info', 'orden'];
}
