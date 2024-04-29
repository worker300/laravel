<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\student;
use App\Models\contact;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = student::with('contact')
                    ->find(2);
        
        // $students = student::with('contact')
        //                 ->where('gender','female')
        //                 ->get();

        $students = student::where('gender','female')
                        ->withWhereHas('contact',function ($query){
                            $query->where('city','mumbai');
                        })->get();

                    
        // echo $students->name . "<br>";
        // echo $students->contact->email . "<br>";

        


        return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = student::create([
            'name' => 'john',
            'age' => 55,
            'gender' => 'male'
        ]);
        
        $students->contact()->create([
            'email' => 'john@gmail.com',
            'phone' => '1234567890',
            'address' => 'wadala',
            'city' => 'new mumbai'
            
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
