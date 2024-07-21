<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Property::all()->each(function ($property) {
            if ($property->name != 'size') {
                Option::factory()->count(4)->create(['property_id' => $property->id]);
            }
        });

        $property = Property::factory()->create([
            'name' => 'size',
        ]);
        $property->options = [
            Option::factory()->create(['property_id' => $property, 'value' => 'S']),
            Option::factory()->create(['property_id' => $property, 'value' => 'M']),
            Option::factory()->create(['property_id' => $property, 'value' => 'L']),
            Option::factory()->create(['property_id' => $property, 'value' => 'XL']),
        ];
        @dd($property->options);
    }
}
