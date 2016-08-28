<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

/* Modulo Usuario
 * */
Route::get('/usuario', [
    'uses' => 'Usuario@index'
]);

Route::get('/usuario/editar/{id}', [
    'uses' => 'Usuario@show'
]);

Route::post('/usuario/eliminar/{id}', [
    'uses' => 'Usuario@destroy'
]);

Route::get('/usuario/crear', [
    'uses' => 'Usuario@create'
]);

Route::post('/usuario/crear', [
    'uses' => 'Usuario@store'
]);

/* Modulo Matrícula
* */
Route::get('/matricula', [
    'uses' => 'Matricula@index'
]);

Route::post('/matricula/crear', [
    'uses' => 'Matricula@store'
]);

/* Modulo Vehículo
* */
Route::get('/vehiculo', [
    'uses' => 'Vehiculo@index'
]);

Route::post('/vehiculo/crear', [
    'uses' => 'Vehiculo@store'
]);

/*
 * Pagina Login
 */
Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login'
]);

Route::post('login','Auth\AuthController@postLogin');

Route::get('logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'logout'
]);

Route::get('/perrito',['uses'=>'perrito@index','as'=>'mona']);

Route::post('/perrito',['uses'=>'perrito@create']);

Route::get('/perrito/{id}',['uses'=>'perrito@show']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
