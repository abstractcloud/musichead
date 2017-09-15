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

Route::get('/', 'DefaultController@index')->name('default');

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



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

/*------------------profile-----start---------------*/
Route::get('/profile', 'ProfileController@index');

/*------------------profile-----end-----------------*/