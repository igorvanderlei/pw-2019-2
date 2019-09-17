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

Route::get('/', "CategoriaController@exibirCategoria");
Route::get('/exibirCategoria/{id?}', "CategoriaController@exibirCategoria");
Route::get('/removerCategoria/{id}', "CategoriaController@removerCategoria");



Route::post('/adicionarCategoria', "CategoriaController@cadastrarCategoria");



/*
Route::get('/teste/{nome}', 'Teste@sayHello');

Route::get('/anotacoes/listar', 'AnotacaoController@listarAnotacoes');

Route::post("/anotacoes/adicionar", 
'AnotacaoController@adicionarAnotacao');


Route::match(['get', 'post'], '/tabuada/{valor?}', "Teste@calcular")
->where('valor', '[0-9]+');
*/
