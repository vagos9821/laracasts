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
        Property::where('name', 'size')->each(function ($property) {
            Option::factory()->create(['property_id' => $property->id, 'value' => 'S']);
            Option::factory()->create(['property_id' => $property->id, 'value' => 'M']);
            Option::factory()->create(['property_id' => $property->id, 'value' => 'L']);
            Option::factory()->create(['property_id' => $property->id, 'value' => 'XL']);
        });
        Property::whereNot('name', 'size')->each(function ($property) {
            Option::factory()->count(4)->create(['property_id' => $property->id]);
        });
    }
}
