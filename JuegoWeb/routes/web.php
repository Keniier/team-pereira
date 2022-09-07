<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\SalaJugadoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Home::class, 'index']);
Route::get('/crear', [Home::class, 'crear']);
Route::get('/ingresar', [Home::class, 'ingresar']);


// esta ruta permite crear una nueva sala
Route::post('/crear-sala', [SalaJugadoresController::class, 'crear_sala']);
// esta ruta permite ingresar
Route::post('/entrar-sala', [SalaJugadoresController::class, 'entrar_sala']);
// ruta para inciar juego
Route::post('/iniciar-juego', [SalaJugadoresController::class, 'iniciar_juego']);

// ruta para la vista del juego
Route::get('/sala-juego/{codigo}/{id_jugador}', [SalaJugadoresController::class, 'index_juego']);

