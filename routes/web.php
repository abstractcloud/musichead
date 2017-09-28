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

Route::get('/profile', 'ProfileController@index');

Route::get('/registration', 'Auth\RegistrationController@create');
Route::post('/registration', 'Auth\RegistrationController@store')->name('reg');

Route::get('/login', 'Auth\LoginController@create');
Route::post('/sessions', 'Auth\LoginController@store')->name('sessions');
Route::get('/logout', 'Auth\LoginController@destroy');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');