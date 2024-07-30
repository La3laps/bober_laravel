<?php

use App\Http\Controllers\ProductDetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/product', [ProductDetailsController::class, 'index']);
Route::get('/product/{id}', [ProductDetailsController::class, 'show']);
