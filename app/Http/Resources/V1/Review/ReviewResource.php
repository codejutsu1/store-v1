<?php

namespace App\Http\Resources\V1\Review;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'comment' => $this->comment,
            'image' => $this->image,
            'facebook' => $this->facebook,
            'tiktok' => $this->tiktok,
            'instagram' => $this->instagram,
            'twitter' => $this->twitter,
            'createdAt' => $this->created_at,
        ];
    }
}
