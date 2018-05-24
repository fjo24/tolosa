<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImgVidrio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_vidrio', function (Blueprint $table) {
            $table->increments('id');
         
            $table->string('ubicacion');
            $table->integer('vidrio_id')->unsigned();

            $table->foreign('vidrio_id')->references('id')->on('tipos_vidrio')->onDelete('cascade');
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
        Schema::dropIfExists('img_vidrio');
    }
}
