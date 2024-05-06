<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Scopes\userscope;
use App\Models\user;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $user = user::withoutglobalScope(userscope::class)
                        ->get();

        // $user = user::select('id','name','email')
        //                 ->with('posts:title,description,user_id')
        //                 ->sort()
        //                 ->get();

        // $user = user::with('posts')
        //                 ->City(['nalasopara' , 'virar'])
        //                 ->active()
        //                 ->sort()
        //                 ->get();

        // $user = user::with('posts')
        //                 ->City('nalasopara')
        //                 ->active()
        //                 ->get();


        // $user = user::with('posts')
        //                 ->active()
        //                 ->get();

        return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
