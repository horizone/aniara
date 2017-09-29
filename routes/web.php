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

Route::get('/', function () {
    return view('welcome');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController');

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController');

Route::get('/reset', 'App\Http\Controllers\Auth\ResetPasswordController');

Route::get('/forgotpass', 'App\Http\Controllers\Auth\ForgotPasswordController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/showtext', 'InputController@store');