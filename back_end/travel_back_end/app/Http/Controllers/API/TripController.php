<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\TripResource;
use App\Repositories\Trip\TripRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class TripController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $tripRepository;
    public function __construct(TripRepositoryInterface $tripRepository)
    {
        $this->tripRepository = $tripRepository;
    }
    public function index()
    {
        try {
            $trips = $this->tripRepository->index();
            $data = TripResource::collection($trips);
            return $this->success($data, "Trips retrieved successfully", 200);
        }catch (Exception $e) {
            return $this->error($e->getMessage() ? $e->getMessage() : "Something Went Wrong", 500);
        }
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
        //
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
