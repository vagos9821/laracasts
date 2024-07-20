<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            'name' => fake()->name(),
            'twitter_tag' => '@' . fake()->randomLetter() . '.' . fake()->lastName(),
            'image' => fake()->imageUrl(),
            'description' => fake()->sentence(),
            'bg_color' => fake()->hexColor(),
            'facebook_url' => fake()->url(),
            'linkedin_url' => fake()->url(),
            'twitter_url' => fake()->url(),
            'instagram_url' => fake()->url(),
            'github_url' => fake()->url(),
        ];
    }
}
