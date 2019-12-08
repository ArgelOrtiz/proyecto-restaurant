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
    return view('welcome');
});

    //Add you routes here, for example:
Route::post('/inicio-sesion', 'UsuariosController@inicia_sesion')->name('inicio-sesion');
Route::post('/cierre-sesion', 'UsuariosController@cierra_sesion')->name('cierre-sesion');
Route::get('/get-usuarios', 'UsuariosController@obten_usuarios')->name('get-usuarios')->middleware('session_usuario');
    

