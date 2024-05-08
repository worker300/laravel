<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class alert extends Component
{

    public $type;
    public $message;

    public $dismissable;

    protected $types = [
        "success",
        "danger",
        "info"
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(string $type = 'info' , string $message='dummy message' , string $dismissable='false')
    {
        $this->type = $type;
        $this->message = $message;
        $this->dismissable = $dismissable;
    }


    public function validType(){
        return in_array($this->type , $this->types) ? $this->type : 'info';
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
