<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Bookmark;
use App\Models\Kategori;
use App\Models\PostsRelasi;
use App\Models\ReplyComment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Kategori::factory(4)->create();
        Tag::factory(4)->create();
        Post::factory(10)->create()->each(function ($post) {
            PostsRelasi::factory()->create([
                'post_id' => $post->id,
            ]);
        });
        Bookmark::factory(10)->create();
        Comment::factory(10)->create();
        ReplyComment::factory(20)->create();
    }
}
