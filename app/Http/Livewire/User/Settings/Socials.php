<?php

namespace App\Http\Livewire\User\Settings;

use App\Models\Social;
use Livewire\Component;

class Socials extends Component
{
    public $facebook = '';
    public $twitter = '';
    public $tiktok = '';
    public $instagram = '';
    public $whatsapp = '';
    public $telegram = '';

    protected $rules = [
        'facebook' => 'nullable|string',
        'twitter' => 'nullable|string',
        'tiktok' => 'nullable|string',
        'instagram' => 'nullable|string',
        'whatsapp' => 'nullable|string',
        'telegram' => 'nullable|string',
    ];

    public function mount() {
        $social = Social::getAllSocials();

        $this->facebook = $social->facebook;

        $this->twitter = $social->twitter;

        $this->tiktok = $social->tiktok;

        $this->instagram = $social->instagram;

        $this->whatsapp = $social->whatsapp;

        $this->telegram = $social->telegram;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        Social::updateOrCreate(['id' => 1], $validated_data);

        toast('Successfully Updated', 'success');

        return redirect()->route('settings');
    }

    public function render()
    {
        return view('livewire.user.settings.socials');
    }
}
