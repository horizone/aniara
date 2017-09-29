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
Auth::routes();

Route::get('/home', 'App\Http\Controllers\Auth\HomeController@index')->name('home');

Route::post('/submit', 'App\Http\Controllers\InputController@store');
Route::get('/text', 'App\Http\Controllers\InputController@show');

//Route::get('/login', 'App\Http\Controllers\Auth\LoginController');
//Route::get('/register', 'App\Http\Controllers\Auth\RegisterController');
//Route::get('/reset', 'App\Http\Controllers\Auth\ResetPasswordController');
//Route::get('/forgotpass', 'App\Http\Controllers\Auth\ForgotPasswordController');