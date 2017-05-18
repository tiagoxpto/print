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

Route::get('/', 'HomeController@index')->name('home');

Route::get('users', 'UserController@list_users');
Route::get('impressoes', 'RequestsController@index')->name('impressoes.index');
Route::get('impressoes/create', 'RequestsController@create')->name('impressoes');
Route::post('impressoes', 'RequestsController@store')->name('impressoes.store');;
