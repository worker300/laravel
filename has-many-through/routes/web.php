<?php

use App\Http\Controllers\countrycontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('country', countrycontroller::class);
Route::resource('user', usercontroller::class);
Route::resource('post', postcontroller::class);
