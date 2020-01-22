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

Route::get('/produtos', [
    'as'=>'lista-produtos',
    'uses'=>'ProdutoController@lista'
]);
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::match(array('GET', 'POST'), '/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')
       ->where('id', '[0-9]+');
Route::get('produtos/json', 'ProdutoController@listaJson');