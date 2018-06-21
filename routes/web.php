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


Route::get('/Login',"PaginasController@Login");
Route::get('/',"PaginasController@index");
Route::get('/Cadastrar',"PaginasController@Cadastrar");
Route::get('/ListaNoticia',"PaginasController@ListaNoticia");
Route::get('/CadastroNoticia', "PaginasController@CadastroNoticia");
Route::get('/UpdateNoticia', "PaginasController@UpdateNoticia");


Route::post('/create/noticia', [
   'uses' => 'PaginasController@noticiastore'
]);

Route::get('/update/noticia/{id}', [
   'uses' => 'PaginasController@noticiaupdate',
   'as'   => 'noticia.update'
]);

Route::get('/delete/noticia/{id}',[
   'uses' => 'PaginasController@noticiadelete',
   'as'   => 'noticia.delete'
]);

Route::post('/update/noticia/save/{id}', [
   'uses' => 'PaginasController@noticiaupdatesave',
   'as' => 'noticia.update.save'
]);

Route::get('/ListaUsuario',"UsuarioController@listar");
Route::post('/ListaUsuario/create',"UsuarioController@create");
Route::get('ListaUsuario/edit',"UsuarioController@edit");
Route::get('CadastroUsuario/store',"UsuarioController@store");




