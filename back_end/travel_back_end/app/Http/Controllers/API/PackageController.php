<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PackageResource;
use App\Repositories\Package\PackageRepositoryInterface;
use Exception;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class PackageController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $packageRepository;

    public function __construct(PackageRepositoryInterface $packageRepository)
    {
        $this->packageRepository = $packageRepository;
    }

    public function index()
    {
        $packages = $this->packageRepository->index();
        $data = PackageResource::collection($packages);
        return $this->success($data, "Packages retrieved successfully", 200);
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
            $package = $this->packageRepository->show($id);
            $data = new PackageResource($package);
            return $this->success($data, "Packages details", 200);
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
