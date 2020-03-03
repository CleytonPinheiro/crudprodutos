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

Route::get('/produtos','ProdutosController@index')
    ->name('listar_produtos');

Route::get('/produtos/adicionar', 'ProdutosController@create')
    ->name('form_criar_produto');

Route::post('/produtos/adicionar', 'ProdutosController@store')
    ->name('criar_produto');

//Route::get('/', function () {
//    return view('welcome');
//});
