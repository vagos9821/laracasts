<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'first_name' => 'Vangelis',
            'last_name' => 'Sigalas',
            'email' => 'v.sigalas@netstudio.gr',
        ]);

        Employer::factory()->create([
            'user_id' => $user,
            'name' => 'Vangelis Sigalas',
        ]);

        $this->call([
            JobSeeder::class,
            ProfileSeeder::class,
            VariantSeeder::class,
            PropertySeeder::class,
            OptionSeeder::class,
            RecipeSeeder::class,
        ]);
    }
}
