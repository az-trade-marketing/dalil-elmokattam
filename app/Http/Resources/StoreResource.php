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
        $reviews = $this->reviews;
        $locale = app()->getLocale();
        // Calculate the average rating
        $averageRating = $reviews->isEmpty() ? 0 : $reviews->avg('rating');
        $averageRating = number_format($averageRating, 1);
        $response = [
            'id' => $this->id,
            'cat_name' => app()->getLocale() == 'ar' ? $this->category->name_ar : $this->category->name_en,
            'rating' =>  $averageRating,
            'reviews' => ReviewsResource::collection($this->reviews),
            'zone_name' => app()->getLocale() == 'ar' ? $this->zones->name_ar : $this->zones->name_en,
            'tags' => $this->category->tags->map(function ($tag) use ($locale) {
                return $locale == 'ar' ? $tag->name_ar : $tag->name_en;
            }),
        ];
        if ($this->logo) {
            $response['logo'] = asset('images/' . $this->logo);
        }
        // Conditionally add keys if they are not null
        if ($this->image) {
            $response['image'] = asset('images/' . $this->image);
        }

        if ($this->gallaries->isNotEmpty()) {
            $response['gallaries'] = $this->gallaries->map(function ($image) {
                return asset('images/' . $image->image);
            })->toArray();

            if ($this->vidio) {
                $response['gallaries'][] = asset('videos/' . $this->vidio); // Adjust directory if needed
            }
        } else {
            $response['gallaries'] = [];

            if ($this->vidio) {
                $response['gallaries'][] = asset('videos/' . $this->vidio); // Adjust directory if needed
            }
        }


        return array_merge(parent::toArray($request), $response);
    }
}
