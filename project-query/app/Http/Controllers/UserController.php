<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users') 
                    // ->where('name' , 'like' , 's%')
                    // ->whereBetween('age', [18,30])
                    // ->whereNotBetween('age', [18,30])
                    // ->whereIn('city', ['New York', 'Chicago'])
                    // ->wheredate('created_at', '2024-04-22')
                    // ->orderby('age','asc')
                    // ->orderby('name','desc')
                    ->orderBy('id')
                    ->cursorPaginate(4);
                    // ->count();
        // return $users;
        // dd($users);

        // foreach($users as $user){
        //     echo $user->name . "<br>";
        // }

        return view('allusers' , ['data'=> $users]);
        // return view('allusers' , ['data'=> $users]);
    }

    public function singleuser(string $id){
        $users = DB::table('users')->where('id',$id)->get();
        return view('user' , ['data' => $users]);
    }


    public function adduser(Request $req){
        $user = DB::table('users')
                        ->insertorIgnore([
                            [
                            'name' => $req->username,
                            'email' => $req->useremail,
                            'age' => $req->userage,
                            'city' => $req->usercity,
                            ]  
                        ]);

        if($user){
            return redirect(route('home'));
        }else {
            echo "<h1>Data not Added</h1>";
        }
    }

    public function updatepage(string $id){
        // $user = DB::table('users')->where('id',$id)->get();
        $user = DB::table('users')->find($id);
        // return $user;
        return view('updateuser', ['data' => $user]);
        
    }


    public function updateuser(Request $req , $id){
        
        $user = DB::table('users')
                    ->where('id' , $id)
                    ->update(
                        [
                        'name' => $req->username,
                        'email' => $req->useremail,
                        'age' => $req->userage,
                        'city' => $req->usercity,
                        ]
                    );
    if($user){
        return redirect(route('home'));
    }else {
            echo "<h1>Data not updated</h1>";
        }
    } 

    public function deleteUser(string $id){
        $user = DB::table('users')
                    ->where('id',$id)
                    ->delete();

    if($user){
        echo "<h1>Data succssfully deleted</h1>";
        return redirect()->route('home');
        }
        else{
        echo "<h1>Data Not deleted</h1>";
        }
    }


    

    
}

