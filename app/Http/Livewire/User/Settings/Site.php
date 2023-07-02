<?php

namespace App\Http\Livewire\User\Settings;

use App\Models\Setting;
use Livewire\Component;

class Site extends Component
{
    protected $rules = [
        'site_name' => 'required|string',
        'site_email' => 'required|string',
        'site_phone' => 'required|string',
        'site_address' => 'required|string',
        'keywords' => 'required|string',
        'description' => 'required|string',
    ];


    public function mount()
    {
        $this->settings = Setting::getAllSettings();

        $this->site_name = $this->settings->site_name;

        $this->site_email = $this->settings->site_email;

        $this->site_phone = $this->settings->site_phone;

        $this->site_address = $this->settings->site_address;

        $this->keywords = $this->settings->keywords;

        $this->description = $this->settings->description;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        Setting::findOrFail($this->settings->id)->update($validated_data);

        toast('Successfully Updated', 'success');

        // alert()->success('Successful', 'You have created a new FAQ');

        return redirect()->route('settings');
    }

    public function render()
    {
        return view('livewire.user.settings.site');
    }
}
