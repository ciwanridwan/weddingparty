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
    return view('index');
});

Route::get('index', 'WeddingController@index')->name('index');
Route::get('about', 'WeddingController@about')->name('about');
Route::get('event', 'WeddingController@event')->name('event');
Route::get('photograpy', 'WeddingController@photograpy')->name('photograpy');
Route::get('contact', 'WeddingController@contact')->name('contact');
Route::get('blog', 'WeddingController@blog')->name('blog');