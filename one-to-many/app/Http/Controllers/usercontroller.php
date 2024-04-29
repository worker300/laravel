<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use App\Models\post;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = user::with('post')
        //             ->get();

        // $users = user::doesntHave('post')->get();
        
        // $users = user::has('post','>=',3)
        //                 ->with('post')
        //                 ->get();

        $users = user::withcount('post')
                        ->get();

        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $post = new post([
        //     'title' => 'new title',
        //     'description' => 'new description ......',
        // ]);

        // $user = user::find(2);

        // $user->post()->save($post);
        
        
        $user = user::find(2);

        $user->post()->create([
                'title' => 'new title 2',
                'description' => 'new description 2 ......',
            ]);

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
