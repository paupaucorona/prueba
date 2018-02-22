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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user','userController@index');
Route::get('/usuario/{user}', 'userController@show');
Route::get('/user/create', 'userController@create');
Route::post('/user/create', 'userController@store');
Route::post('/user/{user}/edit', 'userController@edit');
Route::patch('/user/{user}', 'userController@update');

