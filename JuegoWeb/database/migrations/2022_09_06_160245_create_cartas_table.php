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
        Schema::create('cartas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('numero');
            $table->char('paquete');
            $table->char('nombre');
            $table->bigInteger('id_sala_jugador_fk')->unsigned()->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('cartas');
    }
};
