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

        $urls = [
            'https://miro.medium.com/v2/resize:fit:4800/format:webp/0*Pr54mj2p6BsDDb5e',
            'https://miro.medium.com/v2/resize:fit:1400/format:webp/1*DVbm_NZA5u3DRbhMEu3tgQ.jpeg',
            'https://images.unsplash.com/photo-1778090887585-b27fae5b6f03?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDR8NnNNVmpUTFNrZVF8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1778166025666-d8726fdaca7e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDZ8NnNNVmpUTFNrZVF8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1778783622633-e426517de30e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE3fGhtZW52UWhVbXhNfHxlbnwwfHx8fHw%3D',
            'https://images.unsplash.com/photo-1778668824380-71f3883207fc?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDI3fGhtZW52UWhVbXhNfHxlbnwwfHx8fHw%3D',
            'https://plus.unsplash.com/premium_photo-1749043321851-4b190d051457?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDF8TThqVmJMYlRSd3N8fGVufDB8fHx8fA%3D%3D',
            'https://plus.unsplash.com/premium_photo-1721467062601-3eba452181af?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDF8RnpvM3p1T0hONnd8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1778671401408-18430561ab51?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDd8RnpvM3p1T0hONnd8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1778532747971-5e57504f393c?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDIwfEZ6bzN6dU9ITjZ3fHxlbnwwfHx8fHw%3D',
            'https://plus.unsplash.com/premium_photo-1777272106338-818953bce62d?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDMxfEZ6bzN6dU9ITjZ3fHxlbnwwfHx8fHw%3D',
            'https://images.unsplash.com/photo-1777175513145-df96434822a9?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDI4fEpyNmZBTXRmY2lVfHxlbnwwfHx8fHw%3D',
            'https://images.unsplash.com/photo-1773332585749-5146862ba746?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDF8MHxzZWFyY2h8MXx8dGVjaG5vbG9neXxlbnwwfHwwfHx8MA%3D%3D',
            'https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHRlY2hub2xvZ3l8ZW58MHx8MHx8fDA%3D',
            'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHRlY2hub2xvZ3l8ZW58MHx8MHx8fDA%3D',
            'https://plus.unsplash.com/premium_photo-1676637656166-cb7b3a43b81a?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YWl8ZW58MHx8MHx8fDA%3D',
            'https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmxvZ3xlbnwwfHwwfHx8MA%3D%3D',
            'https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YmxvZ3xlbnwwfHwwfHx8MA%3D%3D',
            'https://images.unsplash.com/photo-1545239351-ef35f43d514b?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGJsb2d8ZW58MHx8MHx8fDA%3D',
            'https://images.unsplash.com/photo-1510127034890-ba27508e9f1c?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FtZXJhfGVufDB8fDB8fHww',
            'https://plus.unsplash.com/premium_photo-1673448391005-d65e815bd026?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8Y2FtZXJhfGVufDB8fDB8fHww',
        ];

        return [
            'user_id' => User::factory(),
            'title' => fake()->realText($this->faker->numberBetween(30, 100)),
            'slug' => Str::slug($title),
            'content' => function () {
                return '<h2 class="text-xl font-semibold my-2">' . $this->faker->realText(70) . '</h2>' .
                    '<p class="text-gray-400">' . $this->faker->realText(300). '</p>' .
                    '<br>'.
                    '<p class="text-gray-400">' .$this->faker->realText(200) . '</p>' .
                    '<br>'.
                    '<h3 class="text-xl font-semibold my-2">' . $this->faker->realText(40) . '</h3>' .
                    '<p class="text-gray-400">' .$this->faker->realText(400) . '</p>' .
                    '<br>'.
                    '<p class="text-gray-400">' .$this->faker->realText(200) . '</p>';
            },
            'cover_image' => fake()->randomElement($urls),
            'status' => fake()->randomElement(['draft', 'published']),
            'published_at' => now()
        ];
    }
}
