<?php

use App\Http\Controllers\API\HotelController;
use App\Http\Controllers\API\PackageController;
use App\Http\Controllers\API\RestaurantController;
use App\Http\Controllers\API\TransportationController;
use App\Http\Controllers\API\TripController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;



Route::apiResource('users', UserController::class);

Route::apiResource('trips', TripController::class);

Route::apiResource('hotels', HotelController::class);

Route::apiResource('restaurants', RestaurantController::class);

Route::apiResource('packages', PackageController::class);

Route::apiResource('transportations', TransportationController::class);
