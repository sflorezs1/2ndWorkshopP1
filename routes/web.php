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

Route::get('/list', 'App\Http\Controllers\ProductController@catalog')->name('catalog.list');

Route::get('/showitem{product_id}', 'App\Http\Controllers\ProductController@item')->name('catalog.showitem');

Auth::routes();

Route::get('/index', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');
