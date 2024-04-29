<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\student;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function show(){
        $contacts = contact::with('student')->get();

        return $contacts;
    }
}
