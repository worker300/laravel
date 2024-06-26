<?php

namespace App\Livewire;

use App\Models\user;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Userslist extends Component
{

    use WithPagination;

    // #[Url()]        //to get data in url for other sessions
    // #[Url(as : 's')]    
    #[Url(as : 's' , history : false , keep: true)]    
    public $search;

    public function placeholder(){
        return view('placeholder' );

    }
    
    #[On('userlist')]
    public function update($user = null){

    } 

    #[Computed()]
    public function users(){
        return user::latest()
        ->where('name' , 'like' , "%".$this->search."%")
        ->paginate(4);
    }
    public function render()
    {

        // sleep(3);
        // $users = user::latest()
        //         ->where('name' , 'like' , "%($this->search)%")
        //         ->paginate(4);
        
        // return view('livewire.userslist' , [
        //     'users' => user::latest()
        //     ->where('name' , 'like' , "%".$this->search."%")
        //     ->paginate(4)
        // ]);
        
        return view('livewire.userslist' , []);
    }

    
}
