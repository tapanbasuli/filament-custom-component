<?php

namespace App\Livewire;

use Livewire\Component;

class OneTextOneButton extends Component
{
    public $text = "Welcome to the custom Filament page!";

    public function handleClick()
    {
        $this->text = "Button clicked! Text updated.";
    }

    public function render()
    {
        return view('livewire.one-text-one-button');
    }
}
