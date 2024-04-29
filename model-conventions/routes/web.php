<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

route::resource('student' , studentController::class);
