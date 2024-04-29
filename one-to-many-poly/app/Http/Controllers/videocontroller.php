<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\video;
use Illuminate\Http\Request;

class videocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $video = video::with('comments')
        //                 ->find(1);

        // // return $video;

        // echo "<h1> $video->title</h1>";
        // echo "<h4> $video->title</h4>";

        // foreach($video->comments as $comment){
        //     echo $comment->detail;
        //     echo "<hr>"; 
        // }


        $video = video::with('oldestcomment')->find(1);

        return $video;
         

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $video = video::find(2);

        $video->comments()->create([
            'detail' => 'Good video'
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
