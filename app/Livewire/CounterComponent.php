<?php

namespace App\Livewire;

use Livewire\Component;

class CounterComponent extends Component
{
    public $count = 0;

    public function mount(){
        $this->count = 10;
    }

    public function incrementar(){
        $this->count++;
    }
    public function decrementar(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter-component');
    }
}
