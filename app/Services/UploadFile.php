<?php

namespace App\Services;
use File;

class UploadFile
{
    public function store($image, $description=NULL, $model, $migrate=TRUE)
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

    public function remove($image, $model)
    {
        $image_path = public_path('storage/'.$model .'/'.$image);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        return '';
    }
} 
