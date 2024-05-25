<?php

namespace App\Livewire;

use App\Models\todo;
use Exception;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class Todolist extends Component
{
    use WithPagination;

    #[Validate('required |min:3 | max:50')]
    public $name;

    public $search;

    public $editingtodoid;

    #[Validate('required |min:3 | max:50')]
    public $editingtodoname;

    public function create(){
        //validate
        //create todo
        //create input
        //send flash message

        $validated = $this->validateOnly('name');

        todo::create($validated);

        $this->reset('name');

        session()->flash('success' , 'Created');

        $this->resetPage();
    }

    public function delete($todoid){
        try{
            Todo::find($todoid)->delete();
        }catch(Exception $e){
            session()->flash('error' , 'failed to load the page');
            return;
        }
    }

    public function toggle($id){
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function edit($todoid){
        $this->editingtodoid = $todoid;
        $this->editingtodoname = Todo::find($todoid)->name;
    }

    public function canceledit(){
        $this->reset('editingtodoname' , 'editingtodoid');
    }

    public function update(){
        $this->validateOnly('editingtodoname');
        Todo::find($this->editingtodoid)->update(
            [
            'name' => $this->editingtodoname
            ]
        );

        $this->canceledit();
    }

    public function render()
    {

        return view('livewire.todolist',[
            'todos' => todo::latest()->where('name','like',"%{$this->search}%")->paginate(5)
        ]);

        
    }
}
