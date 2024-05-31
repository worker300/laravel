<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('hello Youtube')]
#[Layout('layout.app')]

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage');
    }
}
