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


Route::get('/dweej','App\Http\Controllers\HomeController@Dweej')->name('dweej');

Route::get('/yahvi','App\Http\Controllers\HomeController@Yahvi')->name('yahvi');

Route::get('/camping-in-the-clouds','App\Http\Controllers\HomeController@campingintheclouds')->name('camping-in-the-clouds');
Route::get('/day-in-the-woods','App\Http\Controllers\HomeController@dayinthewoods')->name('day-in-the-woods');

