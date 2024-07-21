<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        Recipe::factory()->create([
            'title' => 'Sweet iced Coffee with Coconut Milk',
            'rating' => 4,
            'image' => '/images/recipe.png',
            'description' => 'Sweet iced Coffee with coconut milk is easy to make and stores well in the firdge. Make a large batch and save yourself a few trips to the coffee shop.',
            'total_time' => '10 minutes',
            'level' => 'easy',
            'budget' => '2',
            'ingredients' => json_encode([
                '3 tablespoons Espresso coffee powder',
                '1 cup off the boil water',
                '1 cup Coconut milk',
                '2 tablespoons Sugar',
            ]),
            'instructions' => json_encode([
                'Boil some water and let it sit for 1-2 minutes',
                'Put the coffee grounds into a cafetiere and pour in the water.',
                'Let the coffee steep for 5 minutes then slowly press down the plunger on your Cafetiere.',
                'Pour the coffee ito a jug, allow to cool then chill for several hours.',
                'Whisk in the coconut milk and condensed milk and serve over plenty of ice.',
                'This coffee can be stored in the firdge for up to 5 days. Shake or stir again before serving.',
            ]),
        ]);
        Recipe::factory(10)->create();
    }
}
