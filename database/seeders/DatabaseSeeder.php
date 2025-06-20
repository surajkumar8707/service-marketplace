<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountriesTableSeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
            AdminSeeder::class,
            ContactSeeder::class,
            HomePageCarouselSeeder::class,
            SettingSeeder::class,
            SocialMediaLinkSeeder::class,
            CategoryServiceSeeder::class,
        ]);
    }
}
