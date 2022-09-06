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
        Schema::create('jugadores_cartas', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('id_sala_jugador_fk')->unsigned();
            $table->bigInteger('id_carta_fk')->unsigned();
            $table->timestamps();
            $table->foreign('id_sala_jugador_fk')->references('id')->on('sala_jugadores');
            $table->foreign('id_carta_fk')->references('id')->on('cartas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores_cartas');
    }
};
