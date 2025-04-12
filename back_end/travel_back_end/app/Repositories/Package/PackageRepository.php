<?php

namespace App\Repositories\Package;

use App\Models\Package;
use App\Repositories\Package\PackageRepositoryInterface;

class PackageRepository implements PackageRepositoryInterface{
    public function index() {
        return Package::all();
    }

    public function show($id) {
        return Package::find($id);
    }

    public function store($validatedData) {
        return Package::create($validatedData);
    }
}
