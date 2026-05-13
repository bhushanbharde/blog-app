<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
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
        $title = fake()->sentence();

        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(),
            'slug' => Str::slug($title),
            'content' => fake()->paragraphs(10, true),
            'cover_image' => fake()->imageUrl(640, 480, 'animals', true),
            'status' => fake()->randomElement(['draft', 'published']),
            'published_at' => now()
        ];
    }
}
