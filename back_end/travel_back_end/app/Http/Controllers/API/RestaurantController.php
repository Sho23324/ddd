<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RestaurantResource;
use App\Repositories\Restaurant\RestaurantRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class RestaurantController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $restaurantRepository;
    public function __construct(RestaurantRepositoryInterface $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }
    public function index()
    {
        $restaurants = $this->restaurantRepository->index();
        $data = RestaurantResource::collection($restaurants);
        return $this->success($data, "Restaurants retrieved successfully", 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $restaurant = $this->restaurantRepository->show($id);
            $data = new RestaurantResource($restaurant);
            return $this->success($data , "Restaurant details", 200);
        }catch (Exception $e) {
            return $this->error($e->getMessage() ? $e->getMessage() : "Something Went Wrong", 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
