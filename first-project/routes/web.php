<?php

use App\Http\Controllers\firstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/about',function(){
//     return view('about') ;
// });

Route::get('about',[firstController::class , 'show']);


