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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::post('/albums/store', 'AlbumsController@Store');

Route::get('/albums/{id}', 'AlbumsController@show');

Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');
Route::get('/photos/{id}', 'PhotosController@show');
Route::post('/photos/{id}', 'PhotosController@destroy');
Route::post('/albums/{id}', 'AlbumsController@destroyalbum');


Route::get('/photos/{id}/download', 'PhotosController@Download');
