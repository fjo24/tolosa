<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombre');
            $table->string('imagen',300);
            $table->text('texto_principal',4000)->nullable();
            $table->text('titulo1')->nullable();
            $table->text('contenido1',2000)->nullable();
            $table->text('titulo2')->nullable();
            $table->text('contenido2',2000)->nullable();
            $table->string('orden',10);
            $table->integer('categoria_id')->unsigned();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**->nullable()
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
