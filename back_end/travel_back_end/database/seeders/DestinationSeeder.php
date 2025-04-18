<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            [
                'id' => 1,
                'name' => 'Bagan',
                'description' => 'An ancient city famous for thousands of Buddhist temples and pagodas.',
                'location' => 'Mandalay Region, Myanmar',
            ],
            [
                'id' => 2,
                'name' => 'Yangon',
                'description' => 'The largest city in Myanmar, home to the golden Shwedagon Pagoda.',
                'location' => 'Yangon Region, Myanmar',
            ],
            [
                'id' => 3,
                'name' => 'Inle Lake',
                'description' => 'A serene freshwater lake known for floating villages and leg-rowing fishermen.',
                'location' => 'Shan State, Myanmar',
            ],
            [
                'id' => 4,
                'name' => 'Ngapali Beach',
                'description' => 'A beautiful beach destination with white sand and clear blue waters.',
                'location' => 'Rakhine State, Myanmar',
            ],
            [
                'id' => 5,
                'name' => 'Mount Popa',
                'description' => 'A volcanic mountain and pilgrimage site with a monastery atop a rocky outcrop.',
                'location' => 'Near Bagan, Myanmar',
            ],
            [
                'id' => 6,
                'name' => 'Mandalay',
                'description' => 'The cultural heart of Myanmar, known for royal palaces and ancient monasteries.',
                'location' => 'Mandalay Region, Myanmar',
            ],
            [
                'id' => 7,
                'name' => 'Golden Rock (Kyaiktiyo Pagoda)',
                'description' => 'A gravity-defying golden boulder with a pagoda on top, an important pilgrimage site.',
                'location' => 'Mon State, Myanmar',
            ],
            [
                'id' => 8,
                'name' => 'Hpa-An',
                'description' => 'A peaceful town surrounded by limestone mountains, caves, and rice fields.',
                'location' => 'Kayin State, Myanmar',
            ],
            [
                'id' => 9,
                'name' => 'Mrauk U',
                'description' => 'An ancient city with stone temples and a mysterious atmosphere, less crowded than Bagan.',
                'location' => 'Rakhine State, Myanmar',
            ],
            [
                'id' => 10,
                'name' => 'Putao',
                'description' => 'A remote town in the far north, gateway to Himalayan trekking and nature.',
                'location' => 'Kachin State, Myanmar',
            ],
            [
                'id' => 11,
                'name' => 'Pyin Oo Lwin',
                'description' => 'A colonial-era hill station known for botanical gardens and cool weather.',
                'location' => 'Mandalay Region, Myanmar',
            ],
            [
                'id' => 12,
                'name' => 'Taunggyi',
                'description' => 'Capital of Shan State, famous for its hot air balloon festival.',
                'location' => 'Shan State, Myanmar',
            ],
            [
                'id' => 13,
                'name' => 'Nay Pyi Taw',
                'description' => 'The capital city of Myanmar, known for its wide roads and government buildings.',
                'location' => 'Nay Pyi Taw Union Territory, Myanmar',
            ],
            [
                'id' => 14,
                'name' => 'Kalaw',
                'description' => 'A hill town and trekking base to Inle Lake, with cool climate and scenic views.',
                'location' => 'Shan State, Myanmar',
            ],
            [
                'id' => 15,
                'name' => 'Thanlyin',
                'description' => 'A historic port town with colonial architecture and nearby religious sites.',
                'location' => 'Yangon Region, Myanmar',
            ],
        ];

        foreach ($destinations as $destination) {
            Destination::create($destination);
        }
    }
}
