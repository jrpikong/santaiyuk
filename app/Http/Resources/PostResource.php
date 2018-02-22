<?php

namespace App\Http\Resources;

use App\Category;
use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\CategoryResource;

class PostResource extends Resource
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
            'author_id' => [
                'id' => $this->name
            ],
            'title' => $this->title,
            'seo_title' => $this->seo_title,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'image' => $this->image,
            'slug' => $this->slug,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'status' => $this->status,
            'featured' => $this->featured,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'created_at' => $this->created_at
        ];
    }
}
