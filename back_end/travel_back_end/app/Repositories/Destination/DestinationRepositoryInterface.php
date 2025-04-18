<?php
namespace App\Repositories\Destination;

interface DestinationRepositoryInterface {
    public function index();
    public function show($id);
    public function store($validatedData);
}
