<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $locale = app()->getLocale();

        $newAttributes = [
            'category' => CategoryResource::collection($this->categories),
        ];
        $existingAttributes = parent::toArray($request);

        unset($existingAttributes['name_en'], $existingAttributes['name_ar']);
        return array_merge($newAttributes,$existingAttributes);

    }
}
