<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TagResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'namespace' => $this->namespace,
            'slug'  => $this->slug,
            'name' => $this->name,
            'count' => $this->count
        ];
    }
}
