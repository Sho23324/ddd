<?php

namespace App\Repositories\Restaurant;

use App\Models\Restaurant;
use App\Repositories\Hotel\HotelRepositoryInterface;

class RestaurantRepository implements RestaurantRepositoryInterface{
    public function index() {
        return Restaurant::all();
    }

    public function show($id) {
        return Restaurant::find($id);
    }

    public function store($validatedData) {
        return Restaurant::create($validatedData);
    }
}
