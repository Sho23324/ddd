<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(HotelSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(TransportationSeeder::class);
        $this->call(TripSeeder::class);
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(DestinationSeeder::class);
    }
}
