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
            'cover_image' => 'https://miro.medium.com/v2/resize:fit:1400/format:webp/1*DVbm_NZA5u3DRbhMEu3tgQ.jpeg',
            'status' => fake()->randomElement(['draft', 'published']),
            'published_at' => now()
        ];
    }
}
