<?php
namespace App\Repositories\Hotel;

use App\Models\Hotel;

class HotelRepository implements HotelRepositoryInterface{
    public function index() {
        return Hotel::all();
    }

    public function show($id) {
        return Hotel::find($id);
    }

    public function store($validatedData) {
        return Hotel::create($validatedData);
    }
}
