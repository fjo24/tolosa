<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacado extends Model
{
	protected $table = "destacados_home";
    protected $fillable = [
        'imagen', 'descripcion', 'link', 'orden'
    ];
}
