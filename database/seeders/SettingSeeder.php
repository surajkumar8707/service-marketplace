<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Service Marketplace',
            'email' => 'support@servicemarketplace.com',
            'whatsapp' => '8707633860',
            'contact' => '8707633860',
            'address' => 'Lucknow',
            'header_image' => "assets/front/images/header.jpg",
            'is_fresh' => 1,
        ]);
    }
}
