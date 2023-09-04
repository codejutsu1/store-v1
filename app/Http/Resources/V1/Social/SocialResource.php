<?php

namespace App\Http\Resources\V1\Social;

use Illuminate\Http\Resources\Json\JsonResource;

class SocialResource extends JsonResource
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
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'tiktok' => $this->tiktok,
            'instagram' => $this->instagram,
            'whatsapp' => $this->whatsapp,
            'telegram' => $this->telegram
        ];
    }
}
