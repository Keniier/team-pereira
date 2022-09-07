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
            $table->foreignId('id')->primary();
            $table->bigInteger('id_sala_jugador_fk')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('id')->references('id')->on('cartas');
            $table->foreign('id_sala_jugador_fk')->references('id')->on('sala_jugadores');
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
