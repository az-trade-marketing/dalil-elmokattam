<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return  [
            'id' => $this->id,
             'user_id' => $this->user?->id ?? '',
            'firstname' => $this->user?->firstname ?? '',
            'lastname' => $this->user?->lastname ?? '',
            'photo' => $this->user?->photo ? asset('images/' . $this->user->photo) : '',
            'message' => $this->message,
            'rating' => $this->rating,
            'created_at' => $this->created_at
        ];
    }
}
