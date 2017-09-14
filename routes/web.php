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

Route::get('/', 'DefaultController@index')->name('home');

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home2');



/*------------------Dashboard*----------------------*/
Route::get('/dashboard', function () {
    return view('backend.index');
});

Route::get('/dashboard/browses/', function () {
    return view('backend.browses');
});

Route::get('/dashboard/artists/', function () {
    return view('backend.artists');
});

Route::get('/dashboard/artists/create', function () {
    return view('backend.add-artist');
});
/*-------------------------------------------------*/

/*------------------Auth*----------------------*/
Route::get('/registration', 'RegistrationController@create');
Route::post('/registration', 'RegistrationController@store')->name('reg');

Route::get('/login', 'LoginController@create');
Route::post('/sessions', 'LoginController@store')->name('sessions');
Route::get('/logout', 'LoginController@destroy');
