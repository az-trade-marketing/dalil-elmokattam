<?php

namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $ratingSum = $this->reviews->sum('rating');
        return array_merge(parent::toArray($request), [
            'id' => $this->id,
            'cat_name'=>app()->getLocale() == 'ar' ? $this->category->name_ar : $this->category->name_en,
            'image' => asset('images/' . $this->image),
            'rating' => $ratingSum,
            'reviews' => ReviewsResource::collection($this->reviews),
            'zone_name' => app()->getLocale() == 'ar' ? $this->zones->name_ar : $this->zones->name_en,

        ]);
    }
}
