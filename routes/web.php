<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'productList']);

Route::get('/', [HomeController::class, 'home_index']);

