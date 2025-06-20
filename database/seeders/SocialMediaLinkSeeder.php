<?php

namespace Database\Seeders;

use App\Models\SocialMediaLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        SocialMediaLink::truncate();

        // Seed new data with default URLs
        SocialMediaLink::create([
            'youTube' => 'https://www.youtube.com/',
            'youTube_show' => false,

            'instagram' => 'https://www.instagram.com/',
            'instagram_show' => true,

            'facebook' => 'https://www.facebook.com/',
            'facebook_show' => true,

            'linkedin' => 'https://www.linkedin.com/',
            'linkedin_show' => false,

            'twitter' => 'https://twitter.com/',
            'twitter_show' => false,
        ]);
    }
}
