<?php

namespace App\Livewire;
use Livewire\Attributes\Url;
use Livewire\Component;

class Multiselect extends Component
// {

//     public $companies = [];

//     public function render()
//     {
//         dump($this->companies);

//         return view('livewire.multiselect');
//     }
// }


{

    #[Url()]
    public $companies = [];


    public function save()
    {
        dump($this->companies);
    }

    public function render()
    {

        return view(
            'livewire.Multiselect'
        );
    }
}
