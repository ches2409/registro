<?php

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
    return view('home');
})->name('home');


// Path resource for eventos
Route::resource('eventos', 'EventosController');

// Path resource for localidades
Route::resource('localidades', 'LocalidadesController');

// Path resource for equipos
Route::resource('equipos', 'EquiposController');

// Path resource for participantes
Route::resource('participantes', 'ParticipantesController');
