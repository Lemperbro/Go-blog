<?php

namespace App\Livewire\Tags;

use Livewire\Component;

class Tags extends Component
{
    public $isOpen = false;

    public function render()
    {
        return view('livewire.tags.tags');
    }
}
