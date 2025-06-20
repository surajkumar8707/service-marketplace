<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;

class CategoryServiceSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Electrical Plumbing and Appliance Services' => [
                'Electrician',
                'Plumber',
                'Wifi',
                'AC'
            ],
            'Rentals' => [
                'PG',
                'Single Rooms',
                'Retail shops'
            ],
            'Transportation' => [
                'Taxi',
                'Volvo bus',
                'Pick up van',
                'Water tanks'
            ],
            'Adventure activities' => [
                'Tourist Attraction',
                'Paragliding'
            ],
            'Construction, Home and Decors and Architects' => [
                'Architect',
                'Interior Design',
                'Modular Kitchen',
                'Core Cutting'
            ],
            'Wedding and Event Management' => [
                'Photographer',
                'Catering',
                'Party Hall'
            ],
            'Cleaning Services' => [
                'Sofa Carpet',
                'Home Cleaning'
            ],
            'Hospitality And Accomodation' => [
                'Hotels',
                'Home Stay'
            ],
            'Food Dining Venues' => [
                'Cafes',
                'Resurants'
            ],
            'Fitness and Fun Activities' => [
                'Dance',
                'Swiming',
                'Gyms'
            ],
            'Legal, Compliance and Accounting' => [
                'CA',
                'Advocate'
            ],
            'Real Estate Consultants' => [
                'Rental Brokers',
                'Property Dealers'
            ],
            'Pandit & Astrologer Services' => [
                'Pandit for pooja',
                'Vastu Consultansy'
            ],
        ];

        foreach ($data as $categoryName => $services) {
            $category = Category::create(['name' => $categoryName]);

            foreach ($services as $serviceName) {
                Service::create([
                    'name' => $serviceName,
                    'description' => $serviceName . ' service under ' . $categoryName,
                    'category_id' => $category->id,
                    'country_id' => 101,
                    'state_id' => 38,
                    'city_id' => 4933,
                ]);
            }
        }
    }
}
