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
    return redirect('estados/');
});

Route::get('estados/', 'EstadoController@index');
Route::get('estados/cadastrar', 'EstadoController@cadastrar');
Route::post('estados/insert', 'EstadoController@insert');
Route::get('estados/editar/{estado}', 'EstadoController@editar');
Route::patch('estados/update/{id}', 'EstadoController@update');
Route::get('estados/deletar/{user}', 'EstadoController@deletar');
Route::get('estados/visualizar/{user}', 'EstadoController@view');


Route::get('cidades/', 'CidadeController@index');
Route::get('cidades/cadastrar', 'CidadeController@cadastrar');
Route::post('cidades/insert', 'CidadeController@insert');
Route::get('cidades/editar/{cidade}', 'CidadeController@editar');
Route::patch('cidades/update/{id}', 'CidadeController@update');
Route::get('cidades/deletar/{user}', 'CidadeController@deletar');
Route::get('cidades/visualizar/{user}', 'CidadeController@view');
