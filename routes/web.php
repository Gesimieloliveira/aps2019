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


Route::get('/', ['as'=>'site.home', 'uses'=>'Site\homeController@index']);

Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);

Route::post('/contato', ['uses'=>'ContatoController@criar']);

Route::post('/contato', ['uses'=>'ContatoController@editar']);

Route::get('/admin/estagiarios', ['as'=>'admin.estagiarios', 'uses'=>'Admin\EstagiarioController@index']); // list todos estagiarios
Route::get('/admin/estagiarios/adicionar', ['as'=>'admin.estagiarios.adicionar', 'uses'=>'Admin\EstagiarioController@adicionar']);
Route::post('/admin/estagiarios/salvar', ['as'=>'admin.estagiarios.salvar', 'uses'=>'Admin\EstagiarioController@salvar']);
Route::get('/admin/estagiarios/editar/{id}', ['as'=>'admin.estagiarios.editar', 'uses'=>'Admin\EstagiarioController@editar']);
Route::put('/admin/estagiarios/atualizar/{id}', ['as'=>'admin.estagiarios.atualizar', 'uses'=>'Admin\EstagiarioController@atualizar']);
Route::put('/admin/estagiarios/deletar/{id}', ['as'=>'admin.estagiarios.deletar', 'uses'=>'Admin\EstagiarioController@deletar']);
