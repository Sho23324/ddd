<?php

namespace App\Repositories\Package;

interface PackageRepositoryInterface  {
    public function index();
    public function show($id);
    public function store($validatedData);
}
