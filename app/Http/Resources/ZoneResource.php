<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZoneResource extends JsonResource
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
            'stores' => StoreResource::collection($this->stores),
            'image'=> asset('images/' . $this->image),
        ];
        $existingAttributes = parent::toArray($request);
        return array_merge($existingAttributes,$newAttributes);

    }
}
