<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
//            'id' => $this->id,
            'parent_id' => $this->parent_id,
//            'order' => $this->order,
//            'name' => $this->name,
//            'slug' => $this->slug
        ];
    }
}
