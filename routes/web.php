<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;

Route::get('/header', [HeaderController::class, 'header_index']);
