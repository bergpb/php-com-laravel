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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produtos', 'ProdutoController@lista')->name('listar');

Route::get('/produtos/cadastrar', 'ProdutoController@novo')->name('cadastrar')
    ->middleware('autenticador');

Route::match(['get', 'post'], '/produtos/adiciona', 'ProdutoController@adiciona')
    ->name('adicionar')
    ->middleware('autenticador');

Route::get('/produtos/mostrar/{id}', 'ProdutoController@mostra')
    ->name('exibir');

Route::get('/produtos/editar/{id}', 'ProdutoController@edita')
    ->name('editar')
    ->middleware('autenticador');

Route::put('/produtos/atualizar/{id}', 'ProdutoController@atualiza')
    ->name('atualizar')
    ->middleware('autenticador');

Route::get('produtos/json', 'ProdutoController@listaJson')
    ->name('listar_json');

Route::get('/produtos/remover/{id}', 'ProdutoController@remove')
    ->name('remover')
    ->middleware('autenticador');

Auth::routes();

Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');

Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/entrar');
});
