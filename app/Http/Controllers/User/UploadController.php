<?php

namespace App\Http\Controllers\User;

use App\Services\UploadFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function store(Request $request, UploadFile $uploadFile)
    {
        // $request->validate([
        //     'file' => 'required|mimes:png,jpg,jpeg|max:2048'
        // ]);
        $uploadFile->store($request);
    }
}
