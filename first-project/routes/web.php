<?php

use App\Http\Controllers\firstController;
use App\Livewire\Homepage;
use App\Livewire\Userspage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/about',function(){
//     return view('about') ;
// });

Route::get('about',[firstController::class , 'show']);

// Route::get('/' , Homepage::class);
Route::get('/users/{user}' , Userspage::class);


