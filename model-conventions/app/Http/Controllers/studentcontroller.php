<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $students = student::find(1);
         return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = new student;
        
        $students->name = "sahil";
        $students->age = 32;

        $students->save();
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
