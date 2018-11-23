<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 						'UserController@index');
Route::get('admin/akun/delete/{id}', 	'UserController@destroy');
Route::get('admin/akun/add', 			'UserController@create');
Route::post('admin/akun/save', 			'UserController@store');
Route::get('admin/akun/edit/{id}', 		'UserController@edit');
Route::post('admin/akun/update', 		'UserController@update');

Route::get('/penduduk', 		'PendudukController@index');
Route::get('/penduduk/add', 	'PendudukController@create');
Route::post('/penduduk/save', 	'PendudukController@store');
Route::get('/penduduk/edit', 	'PendudukController@edit');
Route::post('/penduduk/update', 'PendudukController@update');
Route::get('/penduduk/show', 	'PendudukController@show');
Route::get('/penduduk/delete{id}', 'PendudukController@destroy');




