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

Route::get('/', 'PublicacionController@inicio');

Route::get('/acerca', function () {
    return view('acerca');
});


Route::resource('publicar', 'PublicacionController')->middleware('auth');
Route::get('/objetos_perdidos', function () {
    return view('objetos_perdidos');
});

Route::get('/objetos_encontrados','PublicacionController@encontrados');

Route::get('/objetos_perdidos','PublicacionController@perdidos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
