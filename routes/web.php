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

Auth::routes(); 
Route::middleware('auth')->prefix('adm')->group(function () {

Route::get('/', function () {
    return view('/auth/login');
});
//Route::get('/home', 'HomeController@index')->name('home');

/*------------usuario----------------*/
Route::resource('user', 'UserController');

/*------- Metadato-------------*/
//Route::resource('metadatos','MetadatoController');
Route::resource('empresa','EmpresaController');
/*------------Home----------------*/
Route::resource('home', 'HomeController');
/*------------productos----------------*/
Route::resource('productos', 'ProductoController');
/*------------sliders----------------*/
Route::get('sliders/{id}/destroy',[
			'uses'=>'SlidersController@destroy',
			'as'=>'sliders.destroy'
]);
Route::resource('sliders', 'SlidersController');
/*------------metadatos----------------*/
Route::resource('metadatos', 'MetadatosController');


//fin filtro auth
});

