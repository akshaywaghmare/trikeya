<?php

use Illuminate\Support\Facades\Route;


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
});


Route::get('/home','App\Http\Controllers\HomeController@home')->name('home');

Route::get('/gallery','App\Http\Controllers\HomeController@Gallery')->name('gallery');

Route::get('/contact-us','App\Http\Controllers\HomeController@Contact')->name('contact-us');
Route::get('/resort','App\Http\Controllers\HomeController@Resort')->name('resort');