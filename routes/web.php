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
Route::prefix('adm')->group(function () {

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
/*------------categorias----------------*/
Route::resource('categorias', 'CategoriasController');
/*------------productos----------------*/
Route::resource('productos', 'ProductoController');
/*------------servicios----------------*/
Route::resource('servicios', 'ServiciosController');
/*------------sliders----------------*/
Route::get('sliders/{id}/destroy',[
			'uses'=>'SlidersController@destroy',
			'as'=>'sliders.destroy'
]);
Route::resource('sliders', 'SlidersController');
/*------------metadatos----------------*/
Route::resource('metadatos', 'MetadatosController');
/*------------destacados-home----------------*/
Route::resource('destacados', 'DestacadosController');
/*------------Contenido-empresas----------------*/
Route::resource('contenidoempresa', 'ContenidoempresaController');

//fin filtro auth
});

