<?php

namespace Database\Factories;

use App\Models\Option;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            'name' => $this->faker->word,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Property $property) {
            Option::factory()->count(4)->create(['property_id' => $property->id]);
        });
    }
}
