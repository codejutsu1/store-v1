<?php

namespace App\Services;

class UploadFile
{
    public function store($image, $description, $model)
    {
        $extension = $image->getClientOriginalExtension();

        $model = "\\App\\Models\\".ucfirst($model);

        $image_name = time() . '_' . $model . '.' . $extension;

        $image->storeAs($model, $image_name);

        $model::create([
            'image' => $image_name,
            'description' => $description
        ]);

        return '';
    }
} 
