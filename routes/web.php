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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'adm'], function(){
	/*-----------------------login administrador----------------------------*/

    Route::post('usuario/authentificate', [
		'uses' => 'UsuarioController@authentificate',
		'as'   => 'usuario.authentificate'
	]);
	Route::get('/', [
		'uses' => 'UsuarioController@login',
		'as'   => 'usuario.login'
	]);
	Route::get('logout', [
		'uses' => 'UsuarioController@logout',
		'as'   => 'usuario.logout'
	]);

});