<?php

namespace Database\Factories;

use App\Models\Variant;
use \App\Models\Product;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variant>
 */
class VariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            'product_id' => Product::factory(),
            'sku' => fake()->unique()->numerify('SKU-#####'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Variant $variant) {
            $properties = Property::all();
            foreach ($properties as $property) {
                $option = $property->options()->inRandomOrder()->first();
                if ($option) {
                    $variant->options()->attach($option);
                }
            }
        });
    }
}
