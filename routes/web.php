<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::post('/order/delete/{id}', 'App\Http\Controllers\OrderController@delete')->name('order.delete');
Route::get('/order', 'App\Http\Controllers\OrderController@index')->name('order.index');
Route::get('/order/create', 'App\Http\Controllers\OrderController@create')->name('order.create');
Route::post('/order/save', 'App\Http\Controllers\OrderController@save')->name('order.save');
Route::get('/order/{id}', 'App\Http\Controllers\OrderController@show')->name('order.show');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name('cart.removeAll');
