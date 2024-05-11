<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public function handleclick(){
        dd('clicked');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
