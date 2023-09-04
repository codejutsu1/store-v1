<?php

namespace App\Http\Resources\V1\Setting;

use Illuminate\Http\Resources\Json\JsonResource;

class SiteResource extends JsonResource
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
            'siteName' => $this->site_name,
            'siteEmail' => $this->site_email,
            'sitePhone' => $this->site_phone,
            'siteAddress' => $this->site_address,
            'keywords' => $this->keywords,
            'description' => $this->description
        ];
    }
}
