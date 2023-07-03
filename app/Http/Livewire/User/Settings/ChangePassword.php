<?php

namespace App\Http\Livewire\User\Settings;

use Livewire\Component;

class ChangePassword extends Component
{
    public $current_password;
    public $new_password;
    public $confirm_new_password;
    
    protected $rules = [
        'current_password' => ['required', 'current_password'],
        'new_password' => ['required',],
        'confirm_new_password' => ['required', 'same:new_password']
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.user.settings.change-password');
    }
}
