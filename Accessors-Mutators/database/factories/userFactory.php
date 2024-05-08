<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'salary' => fake()->randomNumber(4,true),
            'dob' => fake()->date(),
            'password' =>  Str::random(10)
        ];
    }
}
