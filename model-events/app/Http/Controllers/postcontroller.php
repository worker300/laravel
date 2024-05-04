<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = post::find(1);

        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post_title  = 'eleventh another title';
        // $post_slug = Str::slug($post_title,"-");

        post::create([
            'title' => $post_title,
            // 'slug' => $post_slug,
            'description' => 'Lorem ipsum dolor sit amet.',
            'user_id' => 4,
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
