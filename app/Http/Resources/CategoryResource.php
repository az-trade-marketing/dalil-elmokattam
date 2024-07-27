<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'icon'=> asset('images/' . $this->image),
            'stores' => StoreResource::collection($this->stores),
            'tags'=>$this->tags->map(function ($tag) use ($locale) {
                return $locale == 'ar' ? $tag->name_ar : $tag->name_en;
            }),
        ]);
    }
}
