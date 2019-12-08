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


Route::get ('/get-usuarios'    , 'UsuarioController@get_usuarios'    )->name('get-usuarios'    );
Route::post('/nuevo-usuario'   , 'UsuarioController@nuevo_usuario'   )->name('nuevo-usuario'   );
Route::post('/eliminar-usuario', 'UsuarioController@eliminar_usuario')->name('eliminar-usuario');
Route::post('/editar-usuario'  , 'UsuarioController@editar_usuario'  )->name('editar-usuario'  );
