<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'comment' => 'required|string',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:100',
            'facebook' => 'nullable',
            'tiktok' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable'
        ];
    }
}
