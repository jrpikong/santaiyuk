<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SliderResource extends Resource
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
            'id'    =>$this->id,
            'title' => $this->title,
            'captions'  => $this->captions,
            'image' => $this->image,
            'url-slug' => $this->url,
            'created_at'    => $this->created_at->diffForHumans()

        ];
    }
}
