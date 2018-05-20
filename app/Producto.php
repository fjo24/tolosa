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
}
