<?php

namespace App\Livewire;

use App\Livewire\Forms\contactus as FormsContactus;
use Livewire\Component;

class Contactus extends Component
{

    public FormsContactus $form;

    public function submitform(){
        
        $$this->validate();

        // dd($this->form->all());

        session()->flash('success', 'form submitted');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.contactus');
    }
}
