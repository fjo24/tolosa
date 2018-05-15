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

//<<<<<<<<<<<<<PAGINAS>>>>>>>>>>>>>>//

//HOME
Route::get('/', 'PaginasController@welcome');


//Route::get('/home', 'HomeController@index')->name('home');


//<<<<<<<<<<<<<ADMINISTRADOR>>>>>>>>>>>>>>//
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
/*------------obras----------------*/
Route::resource('obras', 'ObrasController');
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
/*------------Logos----------------*/
Route::resource('logos', 'LogosController');
/*------------Redes----------------*/
Route::resource('redes', 'RedesController');

//fin filtro auth
});