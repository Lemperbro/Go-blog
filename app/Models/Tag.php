<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'tags';
    public $incrementing = true;
    protected $guarded = [
        'id'
    ];

    public function postsRelasi(){
        return $this->hasMany(PostsRelasi::class, 'id', 'tag_id');
    }
}
