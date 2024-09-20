<?php

namespace App\Livewire\Article;

use Livewire\Component;
use App\Repositories\Posts\PostsInterface;

class Article extends Component
{
    public $isOpen = false;
    private $postsInterface;

    public function mount(PostsInterface $postsInterface)
    {
        $this->postsInterface = $postsInterface;
    }
    public function render()
    {
        $artikelAll = $this->postsInterface->getAll(8);

        return view('livewire.article.article', compact('artikelAll'));
    }
}
