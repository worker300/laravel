<?php

namespace App\Livewire;

use App\Models\user;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Title('hello Youtube')]
#[Layout('layout.app')]



class Userspage extends Component
{

    public user $user;

    // public function mount(user $user = null){
    //     $this->user = $user;
    // }
    public function render()
    {
        return view('livewire.userspage')->title($this->user->name);
    }
}
