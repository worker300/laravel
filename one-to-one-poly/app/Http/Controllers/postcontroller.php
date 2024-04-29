<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = post::with('image')->find(3);
        return $post;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post =post::create([
            'title' => "title2",
            'desciption' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, ipsum?'
        ]);

        $post->image()->create([
            'url' => 'images/post/post-three.jpg'
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






