<?php
namespace App\Repositories\Payment;

interface PaymentRepositoryInterface {
    public function index();
    public function show($id);
    public function store($validatedData);
}
