<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
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
        return array_merge(parent::toArray($request), [
            'image'=> asset('images/' . $this->image),
            'store' => new StoreResource($this->store),

        ]);
    }
}
