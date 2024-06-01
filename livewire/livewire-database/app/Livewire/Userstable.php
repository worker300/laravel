<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Userstable extends Component
{
    use WithPagination;

    #[Url(history:true)]
    public $perpage = 5; 
    #[Url(history:true)]
    public $admin = ''; 
    #[Url(history:true)]
    public $search = '';
    #[Url(history:true)]
    public $sortby = 'created_at';
    #[Url(history:true)]
    public $sortdr = 'DESC';

    public function updatedSearch(){
        $this->resetPage();
    }

    public function setsortby($sortbyfield){
        if($this->sortby === $sortbyfield){
            $this->sortdr = ($this->sortdr == "ASC") ? 'DESC' : "ASC";
            return;
        }

        $this->sortby = $sortbyfield;
        $this->sortdr = 'DESC';

    }

    public function delete( User $user){
        $user->delete();
    }
    public function render()
    {
        return view('livewire.userstable', [
            'users' => User::search($this->search)
                        ->when($this->admin !== '' , function($query){
                            $query->where('is_admin', $this->admin);
                        })
                        ->orderBy($this->sortby,$this->sortdr)
                        ->paginate($this->perpage)
        ]);
    }
}
