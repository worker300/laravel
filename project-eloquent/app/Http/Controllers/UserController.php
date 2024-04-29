<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = user::all();
        
        // $users = user::find([2,4],['name' , 'email']); 
        // $users = user::count(); 
        // $users = user::max('age'); 
        // $users = user::min('age'); 
        // $users = user::sum('age');
        
        // $users = user::where('city','goregaon')
        //                 ->get();
        
        // $users = user::whereCity('virar')
        //                 ->select('name' , 'email')
        //                 ->get();
        
        // $users = user::whereIn('city',['virar','borivali'])
        // ->get();
        
        
        
        // return $users;
        
        // foreach($users as $user){
            //     echo $user->name . "<br>";
            // }
            
            $users = user::simplepaginate(4);

            // $users = user::all();

            return view('home' , compact('users'));
        }
        
        /**
         * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new user;  //creating the instance
        
        $request->validate([
            'username' => 'required | alpha', 
            'useremail' => 'required | email', 
            'userage' => 'required | numeric', 
            'usercity' => 'required | alpha', 
        ]);


        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;
        // $user->save();

        user::create([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity,
        ]);

        return redirect()->route('user.index')
                        ->with('status', 'New user added succsessfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $users = user::find($id);
        $users = user::findorfail($id);

        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = user::findorfail($user->id);
        return view('updateuser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        $users = user::findorfail($user->id);

        // $users->name = $request->username;
        // $users->email = $request->useremail;
        // $users->age = $request->userage;
        // $users->city = $request->usercity;
        // $users->save();

        $request->validate([
            'username' => 'required | alpha', 
            'useremail' => 'required | email', 
            'userage' => 'required | numeric', 
            'usercity' => 'required | alpha', 
        ]);

        $users = user::where('id',$user->id)
                    ->update([
                        'name' => $request->username,
                        'email' => $request->useremail,
                        'age' => $request->userage,
                        'city' => $request->usercity,
                    ]);

        return redirect()->route('user.index')
                        ->with('status', 'user data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */


    public function destroy(user $user)
    {
        
        // User::destroy($user->id);
        
        // user::truncate();
        
        $users = User::findorfail($user->id);
        $users->delete();
        return redirect()->route('user.index')
                        ->with('status', 'user data deleted succesfully!!');
    }
}


