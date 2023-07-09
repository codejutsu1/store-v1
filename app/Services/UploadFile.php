<?php

namespace App\Services;

class UploadFile
{
    public function store($image, $description, $model)
    {
        $extension = $image->getClientOriginalExtension();

        $model_class = "\\App\\Models\\".ucfirst($model);

        $image_name = time() . '_' . $model . '.' . $extension;

        $image->storeAs('public/'.$model, $image_name);

        $model_class::create([
            'image' => $image_name,
            'description' => $description
        ]);

        return '';
    }
} 
