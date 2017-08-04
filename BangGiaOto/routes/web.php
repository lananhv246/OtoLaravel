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

Route::get('/', 'IndexController@index');
Route::get('/findhangxe', 'IndexController@findHang');
Route::get('/findloaixe', 'IndexController@findLoai');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route xe

Route::resource('hangxe', 'HangxeController');
// Route::get('/hangxe/create', 'HangxeController@create');
Route::post('/hangxe/create', 'HangxeController@store');
// Route::post('/hangxe/{id}/edit', 'HangxeController@update');
Route::resource('loaixe', 'LoaixeController');
Route::post('/loaixe/create', 'LoaixeController@store');
Route::resource('xe', 'XeController');
Route::post('/xe/create', 'XeController@store');
Route::resource('xe_trangbi', 'Xe_trangbiController');
Route::post('/xe_trangbi/create', 'Xe_trangbiController@store');
Route::resource('trangbixe', 'TrangbixeController');
Route::post('/trangbixe/create', 'TrangbixeController@store');

