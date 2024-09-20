<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cover' => 'uploads/coverPosts/default.jpg',
            'title' => fake()->sentence(),
            'deskripsi' => fake()->sentence(),
            'content' => fake()->paragraphs(15, true),
            'views' => fake()->numberBetween(1, 1000),
        ];
    }
}
