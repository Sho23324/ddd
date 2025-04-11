<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title'=> $this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'duration_days'=>$this->duration_days,
            'start_date'=>$this->start_date,
            'end_data'=> $this->end_date,
            'image_url'=>asset('image/'. $this->image_url)
        ];
    }
}
