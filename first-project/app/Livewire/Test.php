<?php

namespace App\Livewire;

use Livewire\Component;
use illuminate\Support\Str;

class Test extends Component
{

    public $text = 'john';
    public $job = 'software';
    public $title = 'youtube';

    public function rendonText(){
        $this->text = str::random(5);
    }
    public function testApi($name){
        return [$name];
    }
    public function render()
    {
        return view('livewire.test');
    }
}
