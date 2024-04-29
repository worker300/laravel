<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = user::get();

        // return $user->roles;

        foreach($users as $user){
            echo $user->name . "<br>";
            echo $user->email . "<br>";

            foreach($user->roles as $role){
                    echo $role->role_name . "/";
                }

            echo "<hr>";
        }
        // foreach($user->roles as $role){
        //     echo $role->role_name . "<br>";
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = user::find(2);

        $user->roles()->attach(5);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
