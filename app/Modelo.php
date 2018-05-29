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

    public function imagenes()
    {
    return $this->hasMany('App\Imgmodelo');
    }

    public function tipos_ventana()
    {
        return $this->belongsToMany('App\Tipoventana', 'tipoventana_modelo', 'modelo_id', 'tiposventana_id');
    }
} 	
