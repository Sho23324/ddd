<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'booking_date'=>$this->booking_date,
            'total_amount'=>$this->total_amount,
            'status'=>$this->status,
            'payment_status'=>$this->payment_status
        ];
    }
}

