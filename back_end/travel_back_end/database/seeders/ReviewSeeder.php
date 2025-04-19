<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'user_id' => 1,
                'package_id' => 3,
                'rating' => 5,
                'comment' => 'Fantastic trip! Everything was well organized.',
            ],
            [
                'user_id' => 2,
                'package_id' => 1,
                'rating' => 4,
                'comment' => 'Really enjoyable. Food could be better though.',
            ],
            [
                'user_id' => 3,
                'package_id' => 2,
                'rating' => 3,
                'comment' => 'It was average. Nothing too exciting.',
            ],
            [
                'user_id' => 4,
                'package_id' => 4,
                'rating' => 2,
                'comment' => 'Disappointed. Expected better accommodation.',
            ],
            [
                'user_id' => 5,
                'package_id' => 5,
                'rating' => 5,
                'comment' => 'Perfect getaway! Highly recommended.',
            ],
            [
                'user_id' => 6,
                'package_id' => 2,
                'rating' => 4,
                'comment' => 'Well-planned tour. Guides were friendly.',
            ],
            [
                'user_id' => 7,
                'package_id' => 1,
                'rating' => 1,
                'comment' => 'Poor service and dirty rooms.',
            ],
            [
                'user_id' => 8,
                'package_id' => 3,
                'rating' => 3,
                'comment' => 'Not bad, but could use some improvements.',
            ],
            [
                'user_id' => 9,
                'package_id' => 5,
                'rating' => 5,
                'comment' => 'The best trip I\'ve had in years!',
            ],
            [
                'user_id' => 10,
                'package_id' => 4,
                'rating' => 4,
                'comment' => 'Nice experience overall. Good value for money.',
            ],
            [
                'user_id' => 11,
                'package_id' => 3,
                'rating' => 5,
                'comment' => 'Loved every part of the journey!',
            ],
            [
                'user_id' => 12,
                'package_id' => 1,
                'rating' => 2,
                'comment' => 'It wasn\'t what I was expecting.',
            ],
            [
                'user_id' => 13,
                'package_id' => 2,
                'rating' => 4,
                'comment' => 'Very good tour, worth the price.',
            ],
            [
                'user_id' => 14,
                'package_id' => 5,
                'rating' => 5,
                'comment' => 'Amazing! Will book again.',
            ],
            [
                'user_id' => 15,
                'package_id' => 4,
                'rating' => 3,
                'comment' => 'Mixed feelings. Some parts were good.',
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
