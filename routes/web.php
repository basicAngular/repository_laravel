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

Route::get('/', 'PostController@index');
Route::post('/post', 'PostController@create')->name('create.post');
Route::get('/post/{id}', 'PostController@read')->name('edit.post');
Route::put('/post/{id}', 'PostController@update')->name('update.post');
Route::delete('/post/{id}', 'PostController@delete')->name('destroy.post');