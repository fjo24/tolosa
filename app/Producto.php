<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable = ['nombre', 'imagen', 'texto_principal', 'titulo1', 'contenido1', 'titulo2', 'contenido2', 'orden', 'categoria_id'];

    public function categoria()
    {
    return $this->belongsTo('App\Categoria');
    }

    public function modelos()
    {
    return $this->hasMany('App\Modelo');
    }

    public function imagenes()
    {
    return $this->hasMany('App\Imgproducto');
    }
}
