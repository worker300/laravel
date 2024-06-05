<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;
    use WithFileUploads;

    #[Validate('required')]
    public $name;

    #[Validate('required | email' , as : 'your email+')]
    public $email;
    
    #[Validate('required ')]
    public $password;

    // #[Validate('nullable | image | max:1024')]
    // public $image;
    #[Validate(['image.*' => 'image | max:2048'])]
    public $image;

    public function createnewuser()
    {

        // sleep(1);

        // Validate input fields
        // $validated = $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:8',
        // ]);
        
        $validated = $this->validate();
         
        if(is_array($this->image)){
            foreach($this->image as $image){
                $validated['image'] = $image->store('uploads' , 'public');
            }
        }
            

        // Create a new user
        $user = User::create($validated);

        // Reset input fields after successful submission
        $this->reset(['name', 'email', 'password']);

        session()->flash('success' , 'user has been created successfully');

        $this->dispatch('userlist' , $user);

        $this->dispatch(
            'alert' ,
            type : 'success',    
            title : 'post liked' ,   
            position : 'center'  ,  
        );
        
        // Optionally, you can emit an event or perform any additional actions after user creation
    }
    
    public function render()
    {
        // $usres = user::all();
        // $usres = user::paginate(5);
        
        // return view('livewire.clicker' , [
            //     'users' => $usres
            // ]);
            
            
            return view('livewire.clicker');
        }
        
        public function reloadlist(){
            $this->dispatch('userlist' ,);
            
    }
}
