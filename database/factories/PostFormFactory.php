<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFormFactory extends Factory
{
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
