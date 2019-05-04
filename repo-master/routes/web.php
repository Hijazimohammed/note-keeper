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

Route::get('/index', 'PostController@index')->name('posts.index');
Route::get('/index/{id}', 'PostController@show')->name('posts.show');

Route::get('/create', 'PostController@create')->name('posts.create');
Route::post('/store', 'PostController@store')->name('posts.store');