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

Route::get('/', 'PagesController@home');

Route::get('/museos/create', 'MuseosController@create')->middleware('auth');
Route::get('/museos/show/{museos}', 'MuseosController@show');
Route::post('/museos/create', 'MuseosController@store')->middleware('auth');

Route::get('/obras/create', 'ObrasController@create')->middleware('auth');
Route::get('/obras/show/{obras}', 'ObrasController@show');
Route::post('/obras/create', 'ObrasController@store')->middleware('auth');

Route::get('/user/{user}', 'UsersController@index');
Route::get('/profile', 'ProfileController@profile')->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');