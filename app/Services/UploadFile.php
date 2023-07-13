<?php

namespace App\Services;

class UploadFile
{
    public function store($image, $description, $model, $migrate=TRUE)
    {
        $extension = $image->getClientOriginalExtension();

        $model_class = "\\App\\Models\\".ucfirst($model);

        $image_name = time() . '_' . $model . '.' . $extension;

        $image->storeAs('public/'.$model, $image_name);

        if($migrate)
        {
            $model_class::create([
                'image' => $image_name,
                'description' => $description
            ]);
        }else {
            return $image_name;
        }

        return '';
    }
} 
