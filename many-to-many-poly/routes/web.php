<?php

use App\Http\Controllers\postcontroller;
use App\Http\Controllers\tagcontroller;
use App\Http\Controllers\videocontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post' , postcontroller::class);

Route::resource('video' , videocontroller::class);

Route::resource('tag' , tagcontroller::class);
