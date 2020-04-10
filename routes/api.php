<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/**
 * Operación de la API de ejemplo:
 * Devuelve un listado de los tableros que tengo en la base de datos
 */

Route::get('tableros','api\TableroController@list') ;
Route::get('tablero/{id}', 'api\TableroController@info') ;






/*NOS OLVIDAMOS DE MOMENTO*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
