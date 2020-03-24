<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablero', function (Blueprint $table) {

            // incremets crea un campo de tipo entero,
            // aturoincremental
            $table->increments('idTab');
            $table->string('nombre', 255);
            $table->date('fecha');

            //el siguiente metodo crea automaticamente los campos
            //created_up y updated_up en la tabla.
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
        Schema::dropIfExists('tablero');
    }
}
