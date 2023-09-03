<?php

namespace App\Http\Resources\v1\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'categoryId' => $this->category_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $this->productImage->image,
            'description' => $this->productImage->description,
            'topProduct' => $this->top_product,
            'originalPrice' => $this->original_price,
            'sellingPrice' => $this->selling_price,
            'status' => $this->status,
            'createdAt' => $this->created_at,
        ];
    }
}
