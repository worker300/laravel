<?php

use App\Http\Controllers\commentcontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\videocontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('video', videocontroller::class);
Route::resource('post', postcontroller::class);
Route::resource('comment', commentcontroller::class);
