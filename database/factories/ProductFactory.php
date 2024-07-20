<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            'name' => fake()->word() . ' ' . fake()->word(),
            'brand' => fake()->word(),
            'description' => fake()->sentence(),
            'image' => json_encode([
                fake()->imageUrl(640, 480, 'clothes', true),
                fake()->imageUrl(640, 480, 'clothes', true),
                fake()->imageUrl(640, 480, 'clothes', true),
            ]),
            'price' => fake()->randomFloat(2, 20, 400),
            'sale' => fake()->randomNumber(2),
        ];
    }
}

