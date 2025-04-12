<?php
namespace App\Repositories\Transportation;

interface TransportationRepositoryInterface {
    public function index();
    public function show($id);
    public function store($validatedData);
}
