<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;

Route::resource('/student',studentController::class);
Route::get('/contact',[contactController::class, 'show']);
