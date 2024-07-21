<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            'title' => fake()->sentence(),
            'rating' => fake()->numberBetween(1, 5),
            'image' => fake()->imageUrl(),
            'description' => fake()->sentence(),
            'total_time' => fake()->numberBetween(1, 100) . ' minutes',
            'level' => fake()->randomElement(['easy', 'medium', 'hard']),
            'budget' => fake()->numberBetween(1, 30),
            'ingredients' => json_encode(
                [
                    fake()->numberBetween(1, 5) . ' ' . fake()->sentence(),
                    fake()->numberBetween(1, 5) . ' ' . fake()->sentence(),
                    fake()->numberBetween(1, 5) . ' ' . fake()->sentence(),
                    fake()->numberBetween(1, 5) . ' ' . fake()->sentence(),
                ],
            ),
            'instructions' => json_encode(
                [
                    fake()->sentence(),
                    fake()->sentence(),
                    fake()->sentence(),
                    fake()->sentence(),
                ],
            ),
        ];
    }
}
