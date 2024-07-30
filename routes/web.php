<?php

use App\Http\Controllers\ProductDetailsController;

Route::get('/product', [ProductDetailsController::class, 'index']);
Route::get('/product/{id}', [ProductDetailsController::class, 'show']);
