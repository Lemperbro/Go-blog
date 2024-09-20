<?php
namespace App\Repositories\Posts;

interface PostsInterface{
    public function getAll($limit = 10);
}