<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        Profile::factory()->create([
            'name' => 'Vangelis Sigalas',
            'twitter_tag' => '@v.sigalas',
            'image' => '/images/me-abs.png',
            'description' => 'Building and developing websites, graphical design and UI knowledge.',
            'bg_color' => '#FF895E',
            'facebook_url' => 'https://www.facebook.com/vagelis.s98',
            'linkedin_url' => 'https://www.linkedin.com/in/evangelos-sigalas/',
            'twitter_url' => 'https://x.com/Vaglonk',
            'instagram_url' => 'https://www.instagram.com/vagelis.s/',
            'github_url' => 'https://github.com/vagos9821/',
        ]);
        Profile::factory(25)->create();
    }
}
