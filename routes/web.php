<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('doador', \App\Http\Controllers\DoadorController::class);
Route::resource('entidadeColetora', \App\Http\Controllers\EntidadeColetoraController::class);
Route::resource('cedenteLocal', \App\Http\Controllers\CedenteLocalController::class);
Route::resource('calendarioEvento', \App\Http\Controllers\CalendarioEventoController::class);
