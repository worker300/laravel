<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

// Route::get('/',[studentController::class , 'showstudent']);

Route::get('/',[studentController::class , 'showstudents1']);

Route::get('/union',[studentController::class , 'uniondata']);

Route::get('/when',[studentController::class , 'whendata']);

Route::get('/chunk',[studentController::class , 'chunkdata']);