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
});

Auth::routes();	

Route::POST('home','HomeController@test')->name('test');
Route::get('/home', 'HomeController@index')->name('home');
Route::POST('/welcome','ProdukController@create')->name('create');
Route::get('/lihat','ProdukController@tt')->name('lihats');
Route::get('/trans/{id}','ProdukController@trans')->name('trans');
Route::POST('transs/{id}','TransaksiController@create')->name('crea');
Route::get('/transaction','TransaksiController@test')->name('tt');
