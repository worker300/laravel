<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::view('/', '/adduser1');
// Route::view('/', '/adduser');

Route::post('/add', [usercontroller::class ,'adduser'])->name('adduser');

Route::post('/add1', [usercontroller::class ,'adduser1'])->name('adduser1');
