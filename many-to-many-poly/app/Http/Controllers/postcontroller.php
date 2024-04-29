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
        // $post = post::with('tags')
        //                 ->get();

        // return $post;


        $posts = post::with('tags')
                        ->get();

        foreach($posts as $post){
            echo "<h2>$post->title</h2>";
            echo "<h3>$post->description</h3>";

            foreach($post->tags as $tag){
                echo $tag->tag_name;
            }


        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = post::create([
            "title" => 'Echoes of Eternity: A Time Travelers Dilemma',
            "description" => 'Description: Embark on an epic adventure across the shifting dunes of the Sahara as a band of '
        ]);

        // $post->tags()->create([
        //     'tag_name' => 'sachin tendulkar'
        // ]);


        // $post->tags()->attach(1);


        
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
