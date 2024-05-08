<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function show(){
        $users = user::get();

        foreach($users as $user){
            echo $user->user_name . "<br>";
            echo $user->email . "<br>";
            echo $user->salary . "<br>";
            echo $user->dob . "<br>";
            echo $user->password ;
            echo '<hr>';
        }

    }


    
}
