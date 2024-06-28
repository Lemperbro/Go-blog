<?php

namespace App\Livewire\Tags;

use Livewire\Component;

class TagList extends Component
{
    public $tag;

    public function mount($tag)
    {
        $this->tag = $tag;
    }
    public function render()
    {
        return view('livewire.tags.tag-list');
    }
}
