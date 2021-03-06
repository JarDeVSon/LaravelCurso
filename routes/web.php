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
    return view('home');
});

Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);
Route::post('/contato/', ['uses'=>'ContatoController@criar']);
Route::put('/contato/', ['uses'=>'ContatoController@editar']);
// Rotas do Curso

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/admin/cursos', ['as'=> 'admin.cursos', 'uses'=> 'AdminCursoController@index']);
    Route::get('/admin/cursos/adicionar', ['as'=> 'admin.cursos.adicionar', 'uses'=> 'AdminCursoController@adicionar']);
    Route::post('/admin/cursos/salvar', ['as'=> 'admin.cursos.salvar', 'uses'=> 'AdminCursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}', ['as'=> 'admin.cursos.editar', 'uses'=> 'AdminCursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}', ['as'=> 'admin.cursos.atualizar', 'uses'=> 'AdminCursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}', ['as'=> 'admin.cursos.deletar', 'uses'=> 'AdminCursoController@deletar']);

});

Route::get('/', ['as'=> 'site.home', 'uses'=> 'Site\HomeController@index']);
Route::get('/login', ['as'=> 'site.login', 'uses'=> 'Site\LoginController@index']);
Route::post('/login/entrar', ['as'=> 'site.login.entrar', 'uses'=> 'Site\LoginController@entrar']);
Route::get('/login/sair', ['as'=> 'site.login.sair', 'uses'=> 'Site\LoginController@sair']);

