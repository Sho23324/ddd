<?php

namespace App\Repositories\Restaurant;

interface RestaurantRepositoryInterface{
    public function index();
    public function show($id);
    public function store($validatedData);
}
