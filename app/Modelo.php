<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = "modelos";
    protected $fillable = ['orden', 'nombre', 'texto','producto_id'];

    public function producto()
    {
    	return $this->belongsTo('App\Producto');
    }
} 	
