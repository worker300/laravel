<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\rolecontroller;
use Illuminate\Support\Facades\Route;

route::resource("/user", usercontroller::class);
route::resource("/role", rolecontroller::class);
