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
Route::get('/produtos/{descricao?}', function ($descricao = null){
  return "<h1>Descrição:{$descricao}</h1>";
});
Route::get('/usuarios', function(){
    return "<h1>Listagem de Usuarios";
});

