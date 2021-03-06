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

Route::get('/', 'DiaryController@home')->name('home');
Route::get('/newestate','DiaryController@newestate')->name('newestate');
Route::get('/location','DiaryController@location')->name('location');
Route::get('/price','DiaryController@price')->name('price');
Route::get('/newpost','DiaryController@newpost')->name('newpost');
Route::post('/newpost','DiaryController@store')->name('store'); //保存処理