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

// Rutas al no estar logueado.
Route::get('/museos/show/{museos}', 'MuseosController@show');
Route::get('/obras/show/{obras}', 'ObrasController@show');
Route::get('/user/{user}', 'UsersController@index');

Auth::routes();

//Rutas al estar logueado.
Route::group(['middleware' => 'auth'], function () {
    Route::redirect('/profile', '/profile/account', 302);

    Route::get('/museos/create', 'MuseosController@create');
    Route::post('/museos/create', 'MuseosController@store');
    Route::post('/museos/validar', 'MuseosController@validacionAjaxMuseo');

    Route::get('/obras/create', 'ObrasController@create');
    Route::post('/obras/create', 'ObrasController@store');
    Route::post('/obras/validar', 'ObrasController@validacionAjaxObra');

    Route::get('/profile/edit', 'UsersController@profile');

    Route::get('/profile/account', 'UsersController@edit')->name('profile.account');
    Route::patch('/profile/account', 'UsersController@update');

    Route::get('/profile/password', 'UsersController@edit')->name('profile.password');
    Route::patch('/profile/password', 'UsersController@update');

    Route::get('/profile/avatar', 'UsersController@edit')->name('profile.avatar');

    Route::get('/profile/delete', 'UsersController@edit')->name('profile.delete');
    Route::delete('/profile/delete', 'UsersController@destroy');
});

Route::get('/home', 'HomeController@index')->name('home');