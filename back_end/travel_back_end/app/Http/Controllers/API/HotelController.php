<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\HotelResource;
use App\Repositories\Hotel\HotelRepositoryInterface;
use Illuminate\Http\Request;

class HotelController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $hotelRepository;
    public function __construct(HotelRepositoryInterface $hotelRepository)
    {
        $this->hotelRepository = $hotelRepository;
    }
    public function index()
    {
        $hotels = $this->hotelRepository->index();
        $data = HotelResource::collection($hotels);
        return $this->success($data, "Hotels retrieved successfully", 200);
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
        $hotel = $this->hotelRepository->show($id);
        $data = new HotelResource($hotel);
        return $this->success($data, "Hotel details", 200);
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
