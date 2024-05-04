<?php

use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('test', testcontroller::class);
