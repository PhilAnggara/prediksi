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

Route::get('/', 'MainController@index')
  ->name('home');

Route::get('/tambah', 'MainController@store')
  ->name('tambah');

Route::get('/data', 'MainController@data')
  ->name('data');

Route::get('/tentang', 'MainController@tentang')
->name('tentang');