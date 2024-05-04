<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\test;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = test::where('meta_data->name', 'like' ,'k%')->get();
        return $test;
        // return $test->meta_data['address']['city'];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $test = new test;

        // $test->meta_data = [
        //     'name' => 'krutan',
        //     'email' => 'krutan@gmail.com',
        //     'mobile' => '9786543210'
        // ];

        // $test->save();

        // $test = test::create([
        //     'meta_data' => [
        //         'name' => 'piraj',
        //         'email' => 'piraj@gmail.com',
        //         'mobile' => '0321654987',
        //         'address' => [
        //             'street' => '1223 ll road',
        //             'city' => 'mumbai',
        //             'country' => 'india',
        //         ]
        //     ]

        // ]);

        // $test = test::where('id',1)->update([
            //     'meta_data->name' => 'shahid kapur' 
            // ]);
            
            $test = test::where('id',3)->update([
                'meta_data->address->city' => 'gaon' 
            ]);
            
            // $test = test::find(2);
            // $test->meta_data['name'] = 'john wick';
            // $test->save();

            $test = test::find(2);
            $test->meta_data = collect($test->meta_data)->forget('email');
            $test->save();
            
            
            
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
