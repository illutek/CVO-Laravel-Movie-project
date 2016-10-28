<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//use Illuminate\Routing\Route;

Route::get('/', 'MoviesController@index')->name('home');

Route::get('create', 'MoviesController@create')->name('movies.create');
Route::post('create', 'MoviesController@store')->name('movies.store');

Route::get('{id}/edit', 'MoviesController@edit')->name('movies.edit');
Route::post('{id}/edit', 'MoviesController@update')->name('movies.update');

Route::get('movie/{id}', 'MoviesController@show')->name('movies.show');

Route::delete('delete/{id}', 'MoviesController@destroy')->name('movies.destroy');