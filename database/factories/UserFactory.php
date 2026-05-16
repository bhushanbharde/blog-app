<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomFaceId = $this->faker->numberBetween(50, 222);

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'bio' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'avatar' => "https://mockmind-api.uifaces.co/content/human/{$randomFaceId}.jpg",
            'role' => fake()->randomElement([1,2,3]),
            'about' => fake()->randomElement(['Product Manager', 'Professor', 'Product design', 'Entrepreneur', 'Health scientist', 'Tech Writer', 'AI Engineer', 'Data Analyst', 'Best selling author']),
            'remember_token' => Str::random(20),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
