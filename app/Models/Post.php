<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,Sluggable, SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'posts';
    public $incrementing = true;
    protected $guarded = [
        'id'
    ];



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function Relasi(){
        return $this->hasMany(PostsRelasi::class,  'post_id', 'id');
    }
}
