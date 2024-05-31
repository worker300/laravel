<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
    //     $value = session()->all();
    // echo "<pre>";
    // print_r($value);
    // echo "</pre>";

    // $value = session()->get('name');
    // $value = session('name');
    // echo $value;

    $value = session('name','null');
    echo $value;
        
    }
    public function store(){
        session(['name' => 'krutan']);
        session()->put('class', 'mca');

        return redirect('/');
    }
    public function delete(){
        session()->forget('name');
        session()->flush();  //to delete all sessions
    }
}
