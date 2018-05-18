<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('cont_empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen',300);
            $table->string('titulo',300);
            $table->string('contenido',800);
            $table->string('contenido2',800);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cont_empresas');
    }
}
