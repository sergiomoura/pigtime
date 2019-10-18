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

use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
	return view('index');
});

Route::get('/cadastrar', function(){
	return view('cadastrar');
});

Route::get('/login', function() {
	return view('login');
});

Route::get('/perfil', function(){
	return view('admin.perfil');
})->middleware('auth');

Route::get('/inbox', function(){
	return view('admin.inbox');
});

Route::get('/servicos', function(){
	return view('admin.servicos');
});


Route::post('/regUser','Auth\RegisterController@create');

Route::get('/logout','Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Definindo as rotas para o CRUD de produtos
Route::get    ('/servicos',                   'ServicosController@index'  )->middleware('auth'); // <--- LISTAR OS SERVICOS CADASTRADOS
Route::get    ('/servicos/create',    'ServicosController@create'         ); // <--- MOSTRAR UM FORMULÁRIO PARA CRIAR UM NOVO SERVICO
Route::get    ('/servicos/{id}/edit', 'ServicosController@edit'           ); // <--- MOSTRAR UM FORMULÁRIO PARA ALTERAR UM NOVO SERVICO
Route::get    ('/servicos/{id}',              'ServicosController@show'   ); // <--- MOSTRAR UM ÚNICO SERVICO COM SEUS DETALHES E OPÇÕES - VERMAIS
Route::post   ('/servicos',                   'ServicosController@store'  ); // <--- CRIAR UM SERVICO (REDIRECIONAR PARA A LISTA...)
Route::put    ('/servicos/{id}',              'ServicosController@update' ); // <--- ALTERAR UM SERVICO (REDIRECIONA PARA A LISTA...)
Route::delete ('/servicos/{id}',              'ServicosController@destroy'); // <--- REMOVE UM SERVICO (REDIRECIONA PARA A LISTA...)
Route::get    ('/user/servicos', 'ServicosController@userindex'           ); // <-- MOSTRA OS SERVICOS ASSOCIADOS AO USUARIO
Route::post   ('/servicos/{id}/candidatar','ServicosController@candidatar'); // <-- CANDIDATAR UM USUÁRIO À UM SERVIÇO
Route::put   ('/servicos/{id}/aprovar','ServicosController@aprovar'); // <-- CANDIDATAR UM USUÁRIO À UM SERVIÇO
Route::post   ('/servicos/{id}/finalizar','ServicosController@finalizar'); // <-- FINALIZAR UM SERVICO

Route::get('/p/{id}', function($id){
    return view("admin.pessoa");
});