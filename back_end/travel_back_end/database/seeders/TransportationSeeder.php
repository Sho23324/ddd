<?php

namespace Database\Seeders;

use App\Models\TransportationAgency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transportations = [
            ['name' => 'Bus'],
            ['name' => 'Taxi'],
            ['name' => 'Train'],
            ['name' => 'Airplane'],
            ['name' => 'Ferry'],
            ['name' => 'Bicycle'],
            ['name' => 'Car Rental'],
            ['name' => 'Motorbike'],
            ['name' => 'Tram'],
            ['name' => 'Subway'],
        ];

        foreach ($transportations as $transportation) {
            TransportationAgency::create($transportation);
        }
    }
}
