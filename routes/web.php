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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', 'WeddingController@index')->name('index');
// Route::get('index', 'WeddingController@index')->name('index');
Route::get('logout', 'WeddingController@logout')->name('logout');
Route::get('home', 'WeddingController@admin')->name('home');
Route::get('login', 'WeddingController@login')->name('login');
Route::post('store-login', 'WeddingController@storeLogin')->name('store-login');
Route::get('register', 'WeddingController@register')->name('register');
Route::post('store-register', 'WeddingController@storeRegister')->name('store-register');
Route::get('paket-his', 'WeddingController@paketHis')->name('paket-his');
Route::get('paket-agung', 'WeddingController@paketAgung')->name('paket-agung');
Route::get('paket-hera', 'WeddingController@paketHera')->name('paket-hera');
Route::get('paket-keane', 'WeddingController@paketKeane')->name('paket-keane');
Route::get('paket-pangeran', 'WeddingController@paketPangeran')->name('paket-pangeran');
Route::get('paket-khalifa', 'WeddingController@paketKhalifa')->name('paket-khalifa');
Route::get('/toko', 'WeddingController@tokoForm')->name('toko');
Route::post('/toko/create', 'WeddingController@createToko')->name('toko.create');
Route::get('/{toko}', 'WeddingController@edit')->name('edit');
Route::put('update/{id}', 'WeddingController@update')->name('update');
Route::delete('hapus/{id}', 'WeddingController@destroy')->name('delete');


Route::get('about', 'WeddingController@about')->name('about');
Route::get('daftar-paket', 'WeddingController@daftarPaket')->name('daftar-paket');
Route::post('form-paket', 'WeddingController@store')->name('store');
Route::get('form-paket', 'WeddingController@create')->name('form-paket');
Route::get('contact', 'WeddingController@contact')->name('contact');

// isi paket
Route::get('detail-paket', 'WeddingController@detailPaket')->name('detail-paket');
Route::get('detail-his', 'WeddingController@detailHis')->name('detail-his');
Route::get('detail-agung', 'WeddingController@detailAgung')->name('detail-agung');
Route::get('detail-keane', 'WeddingController@detailKeane')->name('detail-keane');
Route::get('detail-pangeran', 'WeddingController@detailPangeran')->name('detail-pangeran');
Route::get('detail-hera', 'WeddingController@detailHera')->name('detail-hera');
Route::get('detail-khalifa', 'WeddingController@detailKhalifa')->name('detail-khalifa');

