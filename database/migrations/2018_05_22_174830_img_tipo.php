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
            $table->integer('tipos_ventana_id')->unsigned();

            $table->foreign('tipos_ventana_id')->references('id')->on('tipos_ventana')->onDelete('cascade');
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
