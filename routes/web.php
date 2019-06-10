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
route::get('user', function(){
    $user=new App\User;
    $user->name='ches';
    $user->email='as@as.com';
    // $user->rol='admin';
    $user ->password=bcrypt( '123123');
    $user->save();

    return $user;
    });

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

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\loginController@login');
// Route::get('logout', 'Auth\loginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
