<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\CarController::class, 'index']);

Route::get('/all', [\App\Http\Controllers\CarController::class, 'all']);



Route::get('/car/{id}', [\App\Http\Controllers\CarController::class, 'showOne']);
