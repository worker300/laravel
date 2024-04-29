<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::controller(UserController::class)->group(function(){

Route::get('/','showUsers')->name('home');

Route::get('/user/{id}','singleuser')->name('view.user');

Route::post('/add','adduser')->name('add.user');

Route::post('/update/{id}','updateuser')->name('update.user');

Route::get('/updatepage/{id}','updatepage')->name('update.page');

Route::get('/delete/{id}','deleteuser')->name('delete.user');
});


Route::view('/newuser', '/adduser');