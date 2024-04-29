<?php

use App\Http\Controllers\customercontroller;
use App\Http\Controllers\ordercontroller;
use Illuminate\Support\Facades\Route;

Route::resource('/customer', customercontroller::class);
Route::resource('/order', ordercontroller::class);