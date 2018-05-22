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

//EMPRESA
Route::get('/empresa', 'PaginasController@empresa');

//SERVICIOS
Route::get('/servicios', 'PaginasController@servicios');

//CATEGORIAS
Route::get('/categorias', 'PaginasController@categorias');

//PRODUCTOS
Route::get('/productos/{producto_id}',  'PaginasController@productos')->name('productos');
//show producto
Route::get('/producto-info/{producto_id}',  'PaginasController@productoinfo')->name('productoinfo');

//FABRICA
Route::get('/fabrica', 'PaginasController@fabrica');

//OBRAS
Route::get('/obra', 'PaginasController@obra');

//show obra
Route::get('/obra-info/{obra_id}',  'PaginasController@obrainfo')->name('obrainfo');

//PRESUPUESTO
Route::get('/presupuesto', 'PaginasController@presupuesto');
Route::post('enviar-presupuesto',[
	'uses'=>'PaginasController@enviarpresupuesto',
	'as'=>'enviarpresupuesto'
]);

Route::get('/pages/enviar_presupuesto', function () {
    return view('/pages/enviarpresupuesto');
});


//CONTACTO
Route::get('contacto', 'ContactoController@index');
Route::post('enviar-mail',[
	'uses'=>'PaginasController@enviarmail',
	'as'=>'enviarmail'
]);

/*
Route::post('enviar-mail',[
		'uses'=>'PaginasController@mail',
		'as'=>'mail'
	]);
*/
Route::get('/home', 'HomeController@index')->name('home');


//<<<<<<<<<<<<<ADMINISTRADOR>>>>>>>>>>>>>>//middleware('auth')->
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
/*------------modelos----------------*/
Route::resource('modelos', 'ModelosController');
/*------------servicios----------------*/
Route::resource('servicios', 'ServiciosController');
/*------------obras----------------*/
Route::resource('obras', 'ObrasController');
/*------------fabrica----------------*/
Route::resource('fabrica', 'FabricaController');
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