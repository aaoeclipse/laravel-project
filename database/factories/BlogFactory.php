<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'subtitle' => fake()->name(),
            'body' => fake()->safeEmail(),
            'image' => fake()->name(),
            'likes' => fake()->randomDigit(),
            'user_id' => fake()->randomDigit()
            // 'user_id' => \App\Models\User::class::factory()
        ];
    }
}
