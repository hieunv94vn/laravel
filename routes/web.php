<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/danh-sach-user', 'Admin\UserController@index');
Route::get('/them-moi-user', 'Admin\UserController@create');
Route::post('/them-moi-user', 'Admin\UserController@store');
Route::get('/xem-thong-tin/{id}', 'Admin\UserController@show');
