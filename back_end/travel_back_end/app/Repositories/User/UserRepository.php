<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
class UserRepository implements UserRepositoryInterface {
    public function index() {
        return User::all();
    }

    public function show($id) {
        return User::find($id);
    }

    public function store($validatedData) {
        return User::create($validatedData);
    }

    public function update($validatedData, $id) {
        $user = User::find($id);
        return $user->update($validatedData);
    }
}
