<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\company;
use App\Models\phone;

class Form extends Component
{
    public $companyid;

    public $phoneid;


    public function updatedCompanyid(){
        $this->phoneid = null;
    }

    
    #[Computed()]
    public function companies(){
        return company::all();
    } 
    
    #[Computed()]
    public function phones(){
        return phone::where('company_id' , $this->companyid)->get();
    } 


    
    public function render()
    {
        return view('livewire.form');
    }
}
