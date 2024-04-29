<?php

use App\Http\Controllers\imagecontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', usercontroller::class);

Route::resource('post', postcontroller::class);

Route::resource('image', imagecontroller::class);