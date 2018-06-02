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
    return view('inicio');
});

Route::get('/acerca', function () {
    return view('acerca');
});
Route::get('/publicar', function () {
    return view('publicar');
});
Route::get('/objetos_perdidos', function () {
    return view('objetos_perdidos');
});
Route::get('/objetos_encontrados', function () {
    return view('objetos_encontrados');
});
Route::get('/publicacion', function () {
    return view('publicacion');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
