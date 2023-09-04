<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiteRequest extends FormRequest
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
            'site_name' => 'required|string',
            'site_email' => 'required|string',
            'site_phone' => 'required|string',
            'site_address' => 'required|string',
            'keywords' => 'required|string',
            'description' => 'required|string', 
        ];
    }
}
