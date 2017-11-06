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

Route::get('/', 'tickets\MainPageController@show');

Route::get('/categories/{slug}', 'tickets\CategoryPageController@show');

Route::get('/ticket/{id}', 'tickets\TicketPageController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/{id}', 'tickets\AdminAccountController@show');

Route::get('/admin/edit/{id}', 'tickets\ChangeAdminController@show');
Route::post('/admin/edit/{id}', 'tickets\ChangeAdminController@store');
Route::get('/admin/delete/{id}', 'tickets\DeleteAdminController@delete');

Route::get('/user/{id}', 'tickets\UserAccount@show');

Route::get('/user/edit/{id}', 'tickets\ChangeUserController@show');
Route::post('/user/edit/{id}', 'tickets\ChangeUserController@store');

Route::get('/user/delete/{id}', 'tickets\DeleteUserController@delete');
