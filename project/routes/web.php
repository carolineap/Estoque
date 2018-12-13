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

Route::get('/', 'Painel\EstoqueController@index');

// ESTOQUE
Route::group(['prefix' => 'estoque'], function() {

    Route::get('/', 'Painel\EstoqueController@index')->name('estoque.index');

    Route::post('/search', 'Painel\EstoqueController@ajaxBuscaProduto')->name('estoque.search');

    Route::post('/change', 'Painel\EstoqueController@ajaxAlteraQuantProduto')->name('estoque.change');

    Route::post('/info', 'Painel\EstoqueController@ajaxAtualizaProduto')->name('estoque.info');

    Route::get('/new', 'Painel\EstoqueController@create')->name('estoque.create');

    Route::post('/store', 'Painel\EstoqueController@store')->name('estoque.store');

    Route::get('/delete/{id}', 'Painel\EstoqueController@delete')->name('estoque.delete');
});

//PRATOS
Route::group(['prefix' => 'receitas'], function() {

    Route::get('/', 'Painel\ReceitasController@index')->name('receitas.index');

    Route::get('/new', 'Painel\ReceitasController@create')->name('receitas.create');

    Route::post('/search', 'Painel\ReceitasController@ajaxBuscaReceita')->name('receitas.search');

    Route::post('/info', 'Painel\ReceitasController@ajaxInfoReceita')->name('receitas.info');

    Route::post('/store', 'Painel\ReceitasController@store')->name('receitas.store');
});
