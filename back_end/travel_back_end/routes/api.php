<?php

use App\Http\Controllers\API\DestinationController;
use App\Http\Controllers\API\HotelController;
use App\Http\Controllers\API\PackageController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\RestaurantController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\TransportationController;
use App\Http\Controllers\API\TripController;
use App\Http\Controllers\API\UserController;

use App\Http\Controllers\jwtAuthController;
<<<<<<< HEAD

=======
use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
>>>>>>> c4e0ceab243d747c06486d968a84425e05f1da77

use Illuminate\Support\Facades\Route;


Route::post('/register',[jwtAuthController::class,'register']);
Route::post('/login',[jwtAuthController::class,'login']);
Route::get('/roles',[RoleController::class,'index']);
Route::middleware("auth:api")->group(function(){
   
    Route::get('getUser',[jwtAuthController::class,'getUser']);
    Route::post('logout',[jwtAuthController::class,'logout']);
});

Route::apiResource('users', UserController::class);

Route::apiResource('trips', TripController::class);

Route::apiResource('hotels', HotelController::class);

Route::apiResource('restaurants', RestaurantController::class);

Route::apiResource('packages', PackageController::class);

Route::apiResource('reviews', ReviewController::class);

Route::apiResource('destinations', DestinationController::class);

Route::apiResource('payments', PaymentController::class);

Route::apiResource('transportations', TransportationController::class);

