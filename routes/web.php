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

Route::resource('crud','CrudController');
/*Route::get('/crud', 'CrudController@index');
Route::get('/crud/create', 'CrudController@create');
Route::post('/crud', 'CrudController@store');
Route::get('/crud/{id}', 'CrudController@show');
Route::get('/crud/{id}/edit', 'CrudController@edit');
Route::patch('/crud/{id}', 'CrudController@update');
Route::delete('/crud/{id}', 'CrudController@destroy');*/
