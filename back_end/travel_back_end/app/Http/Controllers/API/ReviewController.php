<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Repositories\Review\ReviewRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class ReviewController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $reviewRepository;

    public function __construct(ReviewRepositoryInterface $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    public function index()
    {
        $reviews = $this->reviewRepository->index();
        $data = ReviewResource::collection($reviews);
        return $this->success($data, "Reviews retrieved successfully", 200);
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
            $review = $this->reviewRepository->show($id);
            $data = new ReviewResource($review);
            return $this->success($data, "Reviews details", 200);
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
