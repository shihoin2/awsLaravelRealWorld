<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
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
