<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\FlasherInterface;

class Counter extends Component
{
    public $count = 0;
    public function render()
    {
        return view('livewire.counter');
    }

    public function increase(){
        flash()->addSuccess('Curriculum deleted successfully');
        $this->count++;
    }
}
