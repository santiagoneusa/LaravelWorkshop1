<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/review', 'App\Http\Controllers\OrderController@index')->name('order.index');
Route::get('/review/{id}', 'App\Http\Controllers\OrderController@show')->name('order.show');
Route::get('/review/create', 'App\Http\Controllers\OrderController@create')->name('order.create');
Route::get('/review/save', 'App\Http\Controllers\OrderController@save')->name('order.save');
