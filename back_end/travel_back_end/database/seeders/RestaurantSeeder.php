<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'id' => 1,
                'name' => 'Shan Palace',
                'description' => 'Authentic Shan cuisine in a cozy setting.',
                'location' => 'Taunggyi, Shan State',
            ],
            [
                'id' => 2,
                'name' => 'Yangon Bistro',
                'description' => 'Modern fusion with a Burmese twist.',
                'location' => 'Yangon, Yangon Region',
            ],
            [
                'id' => 3,
                'name' => 'Bagan BBQ House',
                'description' => 'Traditional barbecue and local favorites.',
                'location' => 'Bagan, Mandalay Region',
            ],
            [
                'id' => 4,
                'name' => 'Mandalay Teahouse',
                'description' => 'Classic teahouse serving Myanmar breakfast and snacks.',
                'location' => 'Mandalay, Mandalay Region',
            ],
            [
                'id' => 5,
                'name' => 'Inle Garden Restaurant',
                'description' => 'Scenic lakeside dining with Intha delicacies.',
                'location' => 'Nyaung Shwe, Shan State',
            ],
            [
                'id' => 6,
                'name' => 'Sittwe Seafood Spot',
                'description' => 'Fresh seafood straight from Rakhine coast.',
                'location' => 'Sittwe, Rakhine State',
            ],
            [
                'id' => 7,
                'name' => 'Nay Pyi Taw Eatery',
                'description' => 'Local eats with a modern vibe.',
                'location' => 'Nay Pyi Taw, Union Territory',
            ],
            [
                'id' => 8,
                'name' => 'Golden Delta Dine',
                'description' => 'Flavors of the Ayeyarwady Delta with traditional recipes.',
                'location' => 'Pathein, Ayeyarwady Region',
            ],
            [
                'id' => 9,
                'name' => 'Hpa-An Hills Café',
                'description' => 'Casual dining with views of Mount Zwegabin.',
                'location' => 'Hpa-An, Kayin State',
            ],
            [
                'id' => 10,
                'name' => 'Myeik Pearl Kitchen',
                'description' => 'Southern Myanmar dishes by the sea.',
                'location' => 'Myeik, Tanintharyi Region',
            ]
        ];
        foreach($restaurants as $restaurant) {
            Restaurant::create($restaurant);
        }
    }
}
