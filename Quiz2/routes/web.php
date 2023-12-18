<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MenuController;
use  App\Http\Controllers\PreguntaController;
use  App\Http\Controllers\HistorialController;
use  App\Http\Controllers\SesionController;

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


Route::get('/', [MenuController::class, 'home']);
Route::get('backend', [MenuController::class, 'homeAdmin']);
Route::get('backend/creaPregunta', [MenuController::class, 'creaPreguntaForm']);
Route::get('backend/pregunta/{id}', [PreguntaController::class, 'show']);
Route::get('backend/pregunta/{id}/edit', [PreguntaController::class, 'edit']);
Route::get('backend/pregunta/', [PreguntaController::class, 'index']);
Route::Delete('backend/pregunta/{id}', [MenuController::class, 'eliminar']);
Route::post('backend/creaPregunta', [MenuController::class, 'creaPregunta']);
Route::put('backend/editPregunta', [MenuController::class, 'editaPregunta']);
Route::get('historial', [HistorialController::class, 'index']);
Route::get('login', [SesionController::class, 'loginForm']);
Route::post('login', [SesionController::class, 'login']);
Route::get('logout', [SesionController::class, 'logout']);
Route::get('/preguntas/test', [MenuController::class, 'preguntasTest']);
Route::post('/preguntas/test', [MenuController::class, 'preguntasTestSubmit']);




