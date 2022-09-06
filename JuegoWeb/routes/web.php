<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\SalaController;
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

// esta ruta permite ingresar
// Route::resource('entrar-sala', PhotoController::class);

// esta ruta permite crear una nueva sala
Route::resource('crear-sala', SalaController::class);
