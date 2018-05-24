<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImgTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_tipo', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('ubicacion');
            $table->integer('tipo_id')->unsigned();

            $table->foreign('tipo_id')->references('id')->on('tipos_ventana')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_tipo');
    }
}
