<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala_jugadores', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('codigo_sala_fk')->unsigned();
            $table->string('nombre_jugador');
            $table->foreign('codigo_sala_fk')->references('id')->on('salas');
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
        Schema::dropIfExists('sala_jugadores');
    }
};
