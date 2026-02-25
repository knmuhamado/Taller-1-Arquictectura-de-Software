<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// Web routes for the orders module
Route::get('/', [OrderController::class, 'home']);
Route::get('/orders', [OrderController::class, 'home'])->name('order.home');
Route::get('/orders/list', [OrderController::class, 'index'])->name('order.list');
Route::get('/orders/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/orders/save', [OrderController::class, 'save'])->name('order.save');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('order.show');
Route::get('/orders/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');
