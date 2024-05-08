<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = user::get();
        return view('file-upload', compact('users'));
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
        $request->validate([
            'photo' => 'required | mimes:png,jpg,jpeg | max:3000 '
        ]);
        
        // $file = $request->file('photo');
        
        // $extension = $file->hashName();
        // $extension = $file->getSize();
        // return $extension;
        
        
        $path = $request->file('photo')->store('image','public');
        user::create([
            'file_name' => $path,
        ]);
        
        // $path = $request->file('photo')->store('image','public');
        
        // $filename =time() . '_' .  $file->getClientOriginalName();
        // $path = $request->file('photo')->storeAs('image', $filename , 'public');
        // return $path;
       
       
        $file = $request->file('photo');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        user::create([
            'file_name' => $file->getClientOriginalName(),
        ]);


        return redirect()->route('user.index')->with('status', 'user image uploaded successfulyy');
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
        $user = user::find($id);

        return view('file-update' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = user::find($id);

        if($request->hasFile('photo')){

            $image_path = public_path('storage/') . $user->file_name;

            if(file_exists($image_path)){         
                @unlink("$image_path");
    
            }

            $path = $request->photo->store('image','public');
                
            $user->file_name = $path;
            $user->save();

            return redirect()->route('user.index')
                ->with('status', 'user image                 updated successfulyy');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = user::find($id);

        $user->delete();

        $image_path = public_path('storage/') . $user->file_name;

        if(file_exists($image_path)){
            @unlink("$image_path");

        }

        return redirect()->route('user.index')
                ->with('status', 'user image data deleted successfulyy');

    }
}
