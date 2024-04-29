<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use App\Models\user;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = post::with('user')
        //             ->get();

        // $posts = post::with('user')
        //             ->where('title','hero')
        //             ->get();

        // $posts = post::where('title','hatthi')
        //                 ->withWhereHas('user', function($query){
        //                     $query->where('name','ajay');
        //                 })
        //                 ->get();

        $users = user::where('name', 'ajay')->get();
        $posts = post::whereBelongsTo($users)->get();
        
        return $posts;
    }
                                                       
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

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
