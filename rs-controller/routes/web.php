<?php

use App\Http\Controllers\commentcontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('users' , usercontroller::class);

Route::resource('users.comments' , commentcontroller::class)->shallow();
