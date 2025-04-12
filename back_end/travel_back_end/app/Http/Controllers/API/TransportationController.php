<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransportationResource;
use App\Repositories\Transportation\TransportationRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class TransportationController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $transportationRepository;

    public function __construct(TransportationRepositoryInterface $transportationRepository)
    {
        $this->transportationRepository = $transportationRepository;
    }

    public function index()
    {
        $transportations = $this->transportationRepository->index();
        $data = TransportationResource::collection($transportations);
        return $this->success($data, "Transportations retrieved successfully");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $transportation = $this->transportationRepository->show($id);
            $data = TransportationResource::collection($transportation);
            return $this->success($data, "Transportations details");
        }catch(Exception $e) {
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
