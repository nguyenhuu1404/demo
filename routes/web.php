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
Route::group(['as' => 'admin.', 'namespace' => 'Admin'], function() {
    Route::get('/users', 'UsersController@index')->name('user.index');
    Route::get('/users/create', 'UsersController@create')->name('user.create');
    Route::post('/users', 'UsersController@store')->name('user.store');
    Route::get('/users/{id}', 'UsersController@show')->where('id','[0-9]+')->name('user.show');
    Route::put('/users/{id}', 'UsersController@update')->name('user.update');
    Route::delete('/users/{id}', 'UsersController@delete')->name('user.delete');
});
