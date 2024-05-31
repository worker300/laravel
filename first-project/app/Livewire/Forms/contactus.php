<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class contactus extends Form
{
    #{validate('required |email | max:255)]
        public $email;
    #{validate('required | min:3| max:255)]
        public $subject;
    #{validate('required | min:5 | max:255)]
        public $message;
}
