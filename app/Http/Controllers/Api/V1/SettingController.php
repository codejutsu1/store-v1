<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Models\Social;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\UpdateSiteRequest;
use App\Http\Requests\Api\UpdateSocialRequest;
use App\Http\Resources\V1\Setting\SiteResource;
use App\Http\Resources\V1\Social\SocialResource;

class SettingController extends Controller
{
    use HttpResponses;

    public function site_index()
    {
        return $this->success(['site' => new SiteResource(Setting::getAllSettings())]);
    }

    public function site_update(UpdateSiteRequest $request)
    {
        $site = Setting::first();
        
        $site->update($request->validated());

        return $this->success(['site' => new SiteResource($site)], '', 201);   
    }

    public function social_index()
    {
        return $this->success(['social' => new SocialResource(Social::getAllSocials())]);
    }

    public function social_update(UpdateSocialRequest $request)
    {
        $social = Social::first();

        $social->update($request->validated());

        return $this->success(['social' => new SocialResource($social)], '', 201);
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required',],
        ]);

        User::findOrFail(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return $this->success('', 'Your password has successfully been updated.', 200); 
    }
}
