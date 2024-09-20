<?php
namespace App\Repositories\Posts;

use App\Models\Post;
use App\Repositories\Posts\PostsInterface;

class PostsRepository implements PostsInterface
{
    private $model;
    public function __construct()
    {
        $this->model = new Post;
    }

    /**
     * @param int $limit
     * 
     * @return [type]
     */
    public function getFavorit($limit = 10)
    {
        return $this->model->with(['Relasi.kategori', 'Relasi.tag'])->orderBy('views', 'desc')->paginate($limit);
    }
    /**
     * @param int $limit
     * 
     * @return [type]
     */
    public function getAll($limit = 10){
        return $this->model->with(['Relasi.kategori', 'Relasi.tag'])->latest()->paginate($limit);
    }
}