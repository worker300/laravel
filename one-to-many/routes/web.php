<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\postcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/user',usercontroller::class);

Route::resource('/post',postcontroller::class);