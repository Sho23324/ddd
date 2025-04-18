<?php

namespace App\Repositories\Booking;

use App\Models\Booking;
use App\Repositories\Booking\BookingRepositoryInterface;

class BookingRepository implements BookingRepositoryInterface {
    public function index() {
        return Booking::all();
    }

    public function show($id) {
        return Booking::find($id);
    }

    public function store($validatedData) {
        return Booking::create($validatedData);
    }
}
