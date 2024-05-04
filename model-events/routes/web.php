<?php

use App\Http\Controllers\postcontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::resource('user' , usercontroller::class);
route::resource('post' , postcontroller::class);