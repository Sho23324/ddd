<?php

namespace Database\Seeders;

use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trips = [
            [
                'id'=> 1,
                'title'=>'Ngew Saung trip',
                'description'=> 'For fun with friends',
                'price'=> 100000,
                'duration_days'=> 7,
                'start_date'=> Carbon::now(),
                'end_date'=> Carbon::today()->addDays(7),
                'image_url'=> 'asdfdfasddf'
            ],
            [
                'id'=> 2,
                'title'=>'Ngew Saung trip',
                'description'=> 'For fun with friends',
                'price'=> 100000,
                'duration_days'=> 7,
                'start_date'=> Carbon::now(),
                'end_date'=> Carbon::today()->addDays(7),
                'image_url'=> 'asdfdfasddf'
            ],
            [
                'id'=> 3,
                'title'=>'Ngew Saung trip',
                'description'=> 'For fun with friends',
                'price'=> 100000,
                'duration_days'=> 7,
                'start_date'=> Carbon::now(),
                'end_date'=> Carbon::today()->addDays(7),
                'image_url'=> 'asdfdfasddf'
            ],
            [
                'id'=> 4,
                'title'=>'Ngew Saung trip',
                'description'=> 'For fun with friends',
                'price'=> 100000,
                'duration_days'=> 7,
                'start_date'=> Carbon::now(),
                'end_date'=> Carbon::today()->addDays(7),
                'image_url'=> 'asdfdfasddf'
            ],
        ];


        foreach($trips as $trip) {
            Trip::create($trip);
        }
    }
}
