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
Route::get('/user/{user}', 'UsersController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/museos/create', 'MuseosController@create');
    Route::post('/museos/create', 'MuseosController@store');
    Route::post('/museos/validar', 'MuseosController@validacionAjaxMuseo');

    Route::get('/obras/create', 'ObrasController@create');
    Route::post('/obras/create', 'ObrasController@store');
    Route::post('/obras/validar', 'ObrasController@validacionAjaxObra');

    Route::get('/profile', 'ProfileController@profile');
});

Route::get('/home', 'HomeController@index')->name('home');