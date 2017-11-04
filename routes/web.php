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

Route::get('/tickets/add', 'tickets\AddController@show');
Route::post('/tickets/add', 'tickets\AddController@store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}', 'tickets\UserAccount@show');

Route::get('/user/edit/{id}', 'tickets\ChangeController@show');
Route::post('/user/edit/{id}', 'tickets\ChangeController@store');

Route::get('/user/delete/{id}', 'tickets\DeleteController@delete');
