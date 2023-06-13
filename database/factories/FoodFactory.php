<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Food;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['apple', 'banana', 'peach', 'strawbery', 'pineapple']),
            'calories' => fake()->randomDigit(),
            'proteines' => fake()->randomFloat(1, 20, 30),
            'glucides' => fake()->randomFloat(1, 20, 30),
            'lipides' => fake()->randomFloat(1, 20, 30),
            'diet' => fake()->randomElements(['vegetarian', 'vegan', 'gluten_free', 'paleo', 'keto'], 3),
            'image' => 'https://loremflickr.com/240/240/fruit?random=3',
            'description' => fake()->paragraph(),
        ];
    }
}
