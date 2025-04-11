<?php

namespace App\Repositories\User;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface{
    public function store($validatedData){

    }

    public function index() {
        $user = User::all();
    }
}
