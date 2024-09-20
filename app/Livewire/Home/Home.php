<?php

namespace App\Livewire\Home;

use App\Repositories\Posts\PostsInterface;
use Livewire\Component;

class Home extends Component
{
    private $postsInterface;
    
    public function mount(PostsInterface $postsInterface){
        $this->postsInterface = $postsInterface;
    }
    public function render()
    {
        $artikelAll = $this->postsInterface->getAll(8);
        return view('livewire.home.home', compact('artikelAll'));
    }
}
