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
    return view('index');
});

Route::get('/menu', 'AppController@index')->name('menu');
Route::get('/marcacoes', 'MarcacaoController@index')->name('ver_marcacao');

Route::get('/marcacoes/add', 'MarcacaoController@create')->name('add_marcacao');

Route::get('/marcacoes/{id}', 'MarcacaoController@show')->name('abrir_marcacao');

Route::post('/marcacoes', 'MarcacaoController@store')->name('adicionar_marcacao');

Route::get('/perfil', 'UserController@profile')->name('profile');

Route::put('/perfil', 'UserController@update')->name('update_profile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
