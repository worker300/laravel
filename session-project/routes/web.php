<?php

use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [testcontroller::class , 'index']);
Route::get('/store', [testcontroller::class , 'store']);
Route::get('/delete', [testcontroller::class , 'delete']);


