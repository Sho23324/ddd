<?php
namespace App\Repositories\Transportation;

use App\Models\TransportationAgency;
use App\Repositories\Transportation\TransportationRepositoryInterface;

class TransportationRepository implements TransportationRepositoryInterface {
    public function index() {
        return TransportationAgency::all();
    }

    public function show($id) {
        return TransportationAgency::find($id);
    }

    public function store($validatedData) {
        return TransportationAgency::create($validatedData);
    }
}
