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

Route::get('/museos/show/{museos}', 'MuseosController@show');
Route::get('/obras/show/{obras}', 'ObrasController@show');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/museos/create', 'MuseosController@create');
    Route::post('/museos/create', 'MuseosController@store');

    Route::get('/obras/create', 'ObrasController@create');
    Route::post('/obras/create', 'ObrasController@store');

    Route::get('/profile', 'ProfileController@profile');
});

Route::get('/user/{user}', 'UsersController@index');
Route::get('/home', 'HomeController@index')->name('home');