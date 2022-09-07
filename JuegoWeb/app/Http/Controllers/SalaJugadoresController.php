<?php

namespace App\Http\Controllers;

use App\Models\Cartas;
use App\Models\JugadoresCartas;
use App\Models\SalaJugadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaJugadoresController extends Controller
{
    public function crear_sala(Request $request)
    {
        // funcion para crear codigo de la sala
        function randomHex() {
            $chars = 'ABCDEF0123456789';
            $codigo = '';
            for ( $i = 0; $i < 6; $i++ ) {
               $codigo .= $chars[rand(0, strlen($chars) - 1)];
            }
            return strval($codigo);
         }

        // validacion de nombre de usuario
        $this->validate($request, [
            'nombre' => 'required'
        ]);
        $codigo = randomHex();

        // crear sala y jugador
        $nueva_sala = new SalaJugadores();
        $nueva_sala->codigo_sala = $codigo;
        $nueva_sala->nombre_jugador = $request->nombre;
        $nueva_sala->save();

        $id_jugador = SalaJugadores::where('codigo_sala', $codigo)->where('nombre_jugador', $request->nombre);

        return redirect('/sala-juego/'.$codigo.'/'.$id_jugador);
    }

    public function entrar_sala(Request $request)
    {
        //  validacion de nombre de jugador y sala
        $this->validate($request, [
            'nombre' => 'required',
            'cod_sala' => 'required',
        ]);

        $codigo = $request->cod_sala;
        if (SalaJugadores::where('codigo_sala', '=', $codigo)->count() > 0 and SalaJugadores::where('codigo_sala', '=', $codigo)->count() < 6) {
            // crear registro de jugador sala
            $jugador_sala = new SalaJugadores();
            $jugador_sala->codigo_sala = $codigo;
            $jugador_sala->nombre_jugador = $request->nombre;
            $jugador_sala->save();

            $jugadores = SalaJugadores::where('codigo_sala', $codigo)->get();
            return redirect('/sala-juego/'.$codigo);
        }else{
            return view('inicio.ingresar');
        }


    }

    public function iniciar_juego (Request $request)
    {
        // consultar cunatos jugadores hay
        $codigo_sala = $request->codigo;
        $cant_jugadores = SalaJugadores::where('codigo_sala', $codigo_sala)->count();
        $datos_jugador_sala = SalaJugadores::where('codigo_sala', $codigo_sala)->get();

        // cantidad iguales a reprtir
        $repartir = 32 / $cant_jugadores;
        $repartir = round($repartir);

        //generar numeros random "revolver las cartas"
        $cartas_random = array();

        // random sin repetir cartas
        $rand = range(1, 32);
        shuffle($rand);
        foreach ($rand as $val) {
            array_push($cartas_random, $val);
        }

        // dividir el cartas en la cantidad de jugadores
        $cartas_random = array_chunk($cartas_random, $repartir);

        // cada que inicie una partida las cartas se desasignan
        DB::update('update cartas set id_sala_jugador_fk = null');

        // ciclo de los jugadores
        for ($i=0; $i < $cant_jugadores ; $i++) {
            // ciclo de las cartas
            for ($a=0; $a < $repartir; $a++) {
                $carta = Cartas::where('id', $cartas_random[$i][$a])->get();
                if ($carta[0]->id_sala_jugador_fk == null) {
                    Cartas::where('id', $cartas_random[$i][$a])->update(['id_sala_jugador_fk' => $datos_jugador_sala[$i]->id]);
                }
            }
        }




    }

    public function index_juego($codigo, $id_jugador)
    {
        $jugadores = SalaJugadores::where('codigo_sala', $codigo)->get();
        $cartas = Cartas::where('id_sala_jugador_fk', $id_jugador)->get();
        return view('juego.index', compact(['jugadores', 'codigo', 'cartas', 'id_jugador']));
    }

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
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalaJugadores  $salaJugadores
     * @return \Illuminate\Http\Response
     */
    public function show(SalaJugadores $salaJugadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalaJugadores  $salaJugadores
     * @return \Illuminate\Http\Response
     */
    public function edit(SalaJugadores $salaJugadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalaJugadores  $salaJugadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalaJugadores $salaJugadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalaJugadores  $salaJugadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalaJugadores $salaJugadores)
    {
        //
    }
}
