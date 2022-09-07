<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Models\SalaJugadores;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear_sala(Request $request)
    {
        // // funcion para crear codigo de la sala
        // function randomHex() {
        //     $chars = 'ABCDEF0123456789';
        //     $codigo = '';
        //     for ( $i = 0; $i < 6; $i++ ) {
        //        $codigo .= $chars[rand(0, strlen($chars) - 1)];
        //     }
        //     return strval($codigo);
        //  }

        // //  validacion de nombre de usuario
        // $this->validate($request, [
        //     'nombre' => 'required'
        // ]);
        // $codigo = randomHex();

        // // crear registro de la sala
        // $nueva_sala = new Sala();
        // $nueva_sala->codigo_sala = $codigo;
        // $nueva_sala->save();
        // $sala = Sala::where('codigo_sala', $codigo)->get();

        // // crear registro de jugador salaa
        // $jugador_sala = new SalaJugadores();
        // $jugador_sala->codigo_sala_fk = $sala[0]->id;
        // $jugador_sala->nombre_jugador = $request->nombre;
        // $jugador_sala->save();

        return view('juego.index');
    }

    public function entrar_sala(Request $request)
    {
        // // funcion para crear codigo de la sala
        // function randomHex() {
        //     $chars = 'ABCDEF0123456789';
        //     $codigo = '';
        //     for ( $i = 0; $i < 6; $i++ ) {
        //        $codigo .= $chars[rand(0, strlen($chars) - 1)];
        //     }
        //     return strval($codigo);
        //  }

        // //  validacion de nombre de usuario
        // $this->validate($request, [
        //     'nombre' => 'required'
        // ]);
        // $codigo = randomHex();

        // // crear registro de la sala
        // $nueva_sala = new Sala();
        // $nueva_sala->codigo_sala = $codigo;
        // $nueva_sala->save();
        // $sala = Sala::where('codigo_sala', $codigo)->get();

        // // crear registro de jugador salaa
        // $jugador_sala = new SalaJugadores();
        // $jugador_sala->codigo_sala_fk = $sala[0]->id;
        // $jugador_sala->nombre_jugador = $request->nombre;
        // $jugador_sala->save();

        return view('juego.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function show(Sala $sala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function edit(Sala $sala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sala $sala)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala $sala)
    {
        //
    }
}
