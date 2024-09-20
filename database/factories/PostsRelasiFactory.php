<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posts_relasi>
 */
class PostsRelasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'kategori_id' =>  Kategori::all()->random()->id,
            'tag_id' => Tag::all()->random()->id
        ];
    }
}
