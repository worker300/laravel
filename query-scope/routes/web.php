<?php

use App\Http\Controllers\postcontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('user',usercontroller::class);
Route::resource('post',postcontroller::class);




Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam aliquid nostrum itaque inventore repudiandae quisquam. Est fugiat ratione soluta consequatur.