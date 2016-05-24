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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/home',function(){
   return view('home');
});

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
