<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Counter extends Component
{

    public $surname = "lakeshri";
    public function createNewUser(){
        User::create([
            'name' => 'test user',
            'email' => 'testemail.com',
            'password' => '3216547989',
        ]);
    }

    public function render()
    {
        $title = "Krutan";
        $users = User::all();

        return view('livewire.counter', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
                            