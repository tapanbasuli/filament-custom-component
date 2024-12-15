<?php

namespace App\Livewire;

use Livewire\Component;

class CustomComponent extends Component
{
    public string $text = 'Hello, Filament!';

    public function updateText()
    {
        $this->text = 'Button Clicked!';
    }

    public function mount(){
        $this->text = 'Hello, Filament!';
    }

    public function render()
    {
        return view('livewire.custom-component');
    }
}
