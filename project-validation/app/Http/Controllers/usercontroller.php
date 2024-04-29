<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
// use App\Rules\Uppercase;

use Illuminate\support\Facades\Validator;
use Closure;

class usercontroller extends Controller
{
    public function adduser(UserRequest $req){

        // $req->validate([
        //     'username' => 'required',
        //     'useremail' => 'required | email',
        //     'userage' => 'required | numeric | min:18 | max:60 | between:18,60',
        //     'usercity' => 'required',
        //     'userpass' => 'required | alpha_num | min:6'
        // ],
        // [
        //     "username.required" => "aap hai kon"
        // ]);

        // return $req->all();
        
        // return $req->only(['username', 'usercity']);
        
        return $req->except(['username', 'usercity']);



    }

    public function adduser1(Request $req){

        //  $validate = $req->validate([
        //     'username' => ['required', new Uppercase],
        //     'useremail' => 'required | email'
        // ]);

         $validate = $req->validate([
            'username' => ['required', function(string $attribute , mixed $value , closure $fail){
                if(strtoupper($value) !== $value){
                    $fail('The :attribute must be uppercase');
                }
            }],
            'useremail' => 'required | email'
        ]);

        // dd($validate);

        echo $validate['username'];
        
        // return $req->all();
    }
} 