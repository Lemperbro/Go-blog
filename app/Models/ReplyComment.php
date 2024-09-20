<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReplyComment extends Model
{
    use HasFactory,SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'reply_comments';
    public $incrementing = true;
    protected $guarded = [
        'id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function comment(){
        return $this->belongsTo(Comment::class, 'comment_id', 'id');
    }
}
