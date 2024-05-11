<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class alert extends Component
{

    public $type;

    public $dismissable;

    protected $types = [
        "success",
        "danger",
        "info"
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(string $type = 'info'  , string $dismissable='false')
    {
        $this->type = $type;
        $this->dismissable = $dismissable;
    }


    public function validType(){
        return in_array($this->type , $this->types) ? $this->type : 'info';
    }

    public function link($text , $target = '#'){
        return new HtmlString('<a href='.$target.'class="alert-link">'. $text .'</a>') ;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
