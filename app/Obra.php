<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table = "obras";
    protected $fillable = [
        'titulo', 'imagen', 'materiales', 'descripcion', 'orden'
    ];
}
