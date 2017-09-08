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

Route::get('/dashboard/browse/', function () {
    return view('backend.browse');
});

Route::get('/dashboard/artist/', function () {
    return view('backend.artist');
});
/*-------------------------------------------------*/
