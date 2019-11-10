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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/get-platillos', 'Productos@get_platillos')->name('platillos');
Route::post('/prueba-post', 'Productos@prueba_post')->name('prueba-post');
Route::get('/prueba-get/{nombre}', 'Productos@prueba_get')->name('prueba-get');