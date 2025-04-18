<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\CarController::class, 'index']);

Route::get('/all', [\App\Http\Controllers\CarController::class, 'all']);

Route::post('/filter', [\App\Http\Controllers\CarController::class, 'filter']);

Route::get('/car/{id}', [\App\Http\Controllers\CarController::class, 'showOne']);
