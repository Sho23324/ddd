<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = [
            [
                'id' => 1,
                'name' => 'Hotel Olympia',
                'description' => 'A luxurious hotel near the Olympic stadium, offering premium services and international cuisine.',
                'location' => 'London, UK',
            ],
            [
                'id' => 2,
                'name' => 'Seaside Paradise',
                'description' => 'Beachfront hotel with stunning ocean views and excellent hospitality.',
                'location' => 'Brighton, UK',
            ],
            [
                'id' => 3,
                'name' => 'City Central Inn',
                'description' => 'A convenient stay in the heart of the city, perfect for business and leisure.',
                'location' => 'Manchester, UK',
            ],
            [
                'id' => 4,
                'name' => 'Mountain Retreat Lodge',
                'description' => 'Cozy retreat nestled in the hills, ideal for hiking, relaxation, and nature lovers.',
                'location' => 'Lake District, UK',
            ],
            [
                'id' => 5,
                'name' => 'Royal Garden Hotel',
                'description' => 'Elegant and historic hotel with classic architecture and royal treatment.',
                'location' => 'Edinburgh, UK',
            ],
            [
                'id' => 6,
                'name' => 'Tech Stay Hub',
                'description' => 'Modern hotel with smart rooms and high-speed internet, designed for tech-savvy travelers.',
                'location' => 'Cambridge, UK',
            ],
            [
                'id' => 7,
                'name' => 'Countryside Escape Inn',
                'description' => 'Peaceful countryside inn surrounded by green fields and charming villages.',
                'location' => 'Cotswolds, UK',
            ],
            [
                'id' => 8,
                'name' => 'Skyline View Hotel',
                'description' => 'High-rise hotel offering panoramic views of the skyline and a rooftop lounge.',
                'location' => 'Birmingham, UK',
            ],
        ];

        foreach($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
