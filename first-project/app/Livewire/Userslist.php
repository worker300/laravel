<?php

namespace App\Livewire;

use App\Models\user;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Userslist extends Component
{

    use WithPagination;
    
    #[On('userlist')]
    public function updatelist($user = null){

        // dd($user);
    } 
    public function render()
    {
        $users = user::latest()->paginate(4);

         return view('livewire.userslist' , [
             'users' => $users
         ]);
    }

    
}
