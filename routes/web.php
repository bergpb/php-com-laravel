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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/produtos', 'ProductController@list')->name('list');

Route::get('/produtos/cadastrar', 'ProductController@new')->name('new')
    ->middleware('autenticador');

Route::match(['get', 'post'], '/produtos/adiciona', 'ProductController@add')
    ->name('add')
    ->middleware('autenticador');

Route::get('/produtos/mostrar/{id}', 'ProductController@show')
    ->name('show');

Route::get('/produtos/editar/{id}', 'ProductController@edit')
    ->name('edit')
    ->middleware('autenticador');

Route::put('/produtos/atualizar/{id}', 'ProductController@update')
    ->name('update')
    ->middleware('autenticador');

Route::get('produtos/json', 'ProductController@listJson')
    ->name('list_json');

Route::get('/produtos/remover/{id}', 'ProductController@remove')
    ->name('remove')
    ->middleware('autenticador');

Route::get('/login', 'LoginController@index')
    ->name('login');
Route::post('/login', 'LoginController@login');

Route::get('/registrar', 'RegisterController@create');
Route::post('/registrar', 'RegisterController@store');

Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/login');
})->name('logout');
