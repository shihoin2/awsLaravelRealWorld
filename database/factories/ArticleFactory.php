<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id' => fake(),
            'slug' => fake()->slug(),
            'title' => fake()->text(50),
            'summary' => fake()->text(150),
            'body' => fake()->text(300),
            'tagList' => fake()->text(5),
            'created_at' => fake()->dateTime(),
            'user_id' => fake()->numberBetween(1, 5),

        ];
    }
}
