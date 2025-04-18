<?php
namespace App\Repositories\Review;

interface ReviewRepositoryInterface {
    public function index();
    public function show($id);
    public function store($validatedData);
}
