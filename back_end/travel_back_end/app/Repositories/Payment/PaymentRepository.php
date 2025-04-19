<?php
namespace App\Repositories\Payment;

use App\Models\Payment;

class PaymentRepository {
    public function index() {
        return Payment::all();
    }

    public function show($id) {
        return Payment::find($id);
    }

    public function store($validatedData) {
        return Payment::create($validatedData);
    }
}
