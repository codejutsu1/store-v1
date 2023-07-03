<?php

namespace App\Http\Livewire\User\Settings;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

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

    public function submit()
    {
        $this->validate();
        
        User::findOrFail(auth()->user()->id)->update([
            'password' => Hash::make($this->new_password)
        ]);

        toast('Password Successfully Updated', 'success');

        return redirect()->route('settings');
    }


    public function render()
    {
        return view('livewire.user.settings.change-password');
    }
}
