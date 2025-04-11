<?php

namespace App\Repositories\User;

interface UserRepositoryInterface {
    public function index();
    public function show();
    public function store($validatedData);
}