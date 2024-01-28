<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostForm>
 */
class PostFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'comment' => fake()->text(150),
                'article_id' => fake()->numberBetween(1, 8),
                'created_at' => fake()->dateTime(),
                'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
