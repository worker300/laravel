<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('/user', [usercontroller::class , 'show']);
