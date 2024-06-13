<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function loginpage(){
        if (Auth::id()){
            return redirect()->route('dashboard');
        }

        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }


    public function dashboardpage(){
        
        Gate::authorize('isAdmin');
        return view('dashboard');

        
        // if(Gate::allows('isAdmin')){
        // return view('dashboard');
        // }
        //     return "Access denies";
    }
    public function viewprofile(int $userid){

        Gate::authorize('view-profile' , $userid);   //elser beneath part
            $user = User::findOrFail($userid);
            return view('profile' , compact('user'));



        // instead of allows we can use any to use it as a Or condition ofgate from multiple gates
        // None use when all the gates values are false

        // if(Gate::allows('view-profile' , $userid)){
        //     $user = User::findOrFail($userid);
        //     // return $user;

        //     return view('profile' , compact('user'));
        // }
        // else{
        //     // return redirect()->route('dashboard');
        //     abort(403);
        // }



    }
    public function viewpost(){

        $posts = post::where('user_id' , Auth::id())->get();
        // return $post;

        return view('posts', compact('posts'));
    }

    public function updatepost($postid){

        $post = post::find($postid);
        $tragetuser = $post->user_id;

        Gate::authorize('update-post' , $tragetuser );

        // $post = post::findOrFail($postid);
       return $post ;
    }
}
