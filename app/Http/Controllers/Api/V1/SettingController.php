<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UpdateSiteRequest;
use App\Http\Resources\V1\Setting\SiteResource;

class SettingController extends Controller
{
    use HttpResponses;

    public function site_index()
    {
        return $this->success(['site' => new SiteResource(Setting::getAllSettings())]);
    }

    public function site_update(UpdateSiteRequest $request)
    {
        $site = Setting::where('id',1)->first();
        
        $site->update($request->validated());

        return $this->success(['site' => new SiteResource($site)], '', 201);   
    }
}
