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

});