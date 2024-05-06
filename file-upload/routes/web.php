<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::resource('user',usercontroller::class);


