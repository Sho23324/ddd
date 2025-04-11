<?php


use App\Http\Controllers\jwtAuthController;
use App\Http\Controllers\API\TripController;
use App\Http\Controllers\API\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');



Route::post('/register',[jwtAuthController::class,'register']);
Route::post('/login',[jwtAuthController::class,'login']);

Route::middleware("auth:api")->group(function(){
    Route::get('getUser',[jwtAuthController::class,'getUser']);
    Route::post('logout',[jwtAuthController::class,'logout']);
});
Route::apiResource('users', UserController::class);

Route::apiResource('trips', TripController::class);

