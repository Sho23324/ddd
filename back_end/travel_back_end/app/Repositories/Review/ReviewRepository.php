<?php
namespace App\Repositories\Review;

use App\Models\Review;

class ReviewRepository implements ReviewRepositoryInterface{
    public function index() {
        return Review::all();
    }

    public function show($id) {
        return Review::find($id);
    }

    public function store($validatedData) {
        return Review::create($validatedData);
    }
}
