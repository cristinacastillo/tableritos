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


// Llamamos al método LISTAR del controlador indicado
Route::get('/',    'TableroController@view')->name('tablero.ver') ;

Route::get('/ver', 'NotaController@view')->name('nota.ver') ;

Route::match(['get','post'], '/editar', 'TableroController@edit')->name('tablero.editar') ;
//Route::get('/editar', 'TableroController@edit')->name('tablero.editar') ;
//Route::post('/editar', 'TableroController@edit')->name('tablero.editar') ;

Route::get('/borrar', 'TableroController@delete')->name('tablero.borrar') ;


// Las dos siguientes rutas son equivalentes
//Route::view('/','main') ;
//Route::get('/', function () 
//{
//	return view('main') ;
//});


