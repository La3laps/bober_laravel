<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'productList']);
Route::get('/', [HomeController::class, 'home_index']);
Route::get('/cart', [CartController::class, 'viewCart']);
Route::get('/products/{id}', [ProductController::class, 'show']);

