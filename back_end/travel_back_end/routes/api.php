<?php

use App\Http\Controllers\API\TripController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::apiResource('users', UserController::class);

Route::apiResource('trips', TripController::class);
