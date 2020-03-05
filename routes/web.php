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
    ->name('produtos.listar');

Route::get('/produtos/adicionar', 'ProdutosController@create')
    ->name('form_criar_produto');

Route::post('/produtos/adicionar', 'ProdutosController@store')
    ->name('produtos.adicionar');

Route::delete('/produtos/deletar/{id}','ProdutosController@destroy')
    ->name('produtos.deletar');

Route::post('/produtos/editar/{id}','ProdutosController@editar')
    ->name('produtos.editar');

Route::post('/produtos/update/{id}', 'ProdutosController@update');


//*CATEGORIAS

Route::get('/categorias','CategoriasController@index')
    ->name('categorias.listar');

Route::get('/categorias/adicionar','CategoriasController@create')
    ->name('form_criar_categoria');

Route::post('/categorias/adicionar', 'CategoriasController@store')
    ->name('categorias.adicionar');

Route::delete('/categorias/deletar/{id}','CategoriasController@destroy')
    ->name('categorias.deletar');

Route::post('categorias/editar/{id}','CategoriasController@editar')
    ->name('categorias.editar');

Route::post('/categorias/update/{id}', 'CategoriasController@update');
