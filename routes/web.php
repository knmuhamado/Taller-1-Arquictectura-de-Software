<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/orders', 'App\Http\Controllers\OrderController@index')->name("order.index");
Route::get('/orders/create', 'App\Http\Controllers\OrderController@create')->name("order.create");
Route::post('/orders/save', 'App\Http\Controllers\OrderController@save')->name("order.save");
Route::get('/orders/{id}', 'App\Http\Controllers\OrderController@show')->name("order.show");
