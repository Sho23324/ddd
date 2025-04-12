<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'id' => 1,
                'name' => 'Bagan Explorer',
                'description' => '3-day guided tour through ancient temples and hot air balloon ride.',
                'price' => 350.00,
            ],
            [
                'id' => 2,
                'name' => 'Inle Lake Getaway',
                'description' => '2 nights by the lake with boat tours and floating market visit.',
                'price' => 280.00,
            ],
            [
                'id' => 3,
                'name' => 'Yangon City Break',
                'description' => 'Weekend package exploring Shwedagon Pagoda, markets, and colonial downtown.',
                'price' => 200.00,
            ],
            [
                'id' => 4,
                'name' => 'Mandalay Heritage Tour',
                'description' => 'Cultural highlights including Mandalay Hill, U Bein Bridge, and royal palace.',
                'price' => 320.00,
            ],
            [
                'id' => 5,
                'name' => 'Ngapali Beach Escape',
                'description' => '4-day relaxing beach holiday with seafood dinners and snorkeling.',
                'price' => 450.00,
            ],
            [
                'id' => 6,
                'name' => 'Golden Rock Pilgrimage',
                'description' => 'Spiritual 2-day journey to the iconic Kyaiktiyo Pagoda.',
                'price' => 180.00,
            ],
            [
                'id' => 7,
                'name' => 'Southern Myanmar Discovery',
                'description' => 'Explore Myeik archipelago and Dawei’s secluded beaches.',
                'price' => 500.00,
            ],
            [
                'id' => 8,
                'name' => 'Hpa-An Adventure',
                'description' => 'Cave trekking, kayaking, and mountain hiking in Kayin State.',
                'price' => 300.00,
            ],
            [
                'id' => 9,
                'name' => 'Pyin Oo Lwin Escape',
                'description' => 'Charming colonial hill station trip with botanical gardens visit.',
                'price' => 250.00,
            ],
            [
                'id' => 10,
                'name' => 'Rakhine Cultural Trail',
                'description' => 'Discover Mrauk U temples and Sittwe’s local traditions.',
                'price' => 370.00,
            ],
        ];

        foreach($packages as $package) {
            Package::create($package);
        }
    }
}
