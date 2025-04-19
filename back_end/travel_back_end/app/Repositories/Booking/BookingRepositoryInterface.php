<?php

namespace App\Repositories\Booking;

interface BookingRepositoryInterface {
    public function index();
    public function show($id);
    public function store($validatedData);
}
