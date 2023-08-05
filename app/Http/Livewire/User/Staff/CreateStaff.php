<?php

namespace App\Http\Livewire\User\Staff;

use App\Models\User;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class CreateStaff extends ModalComponent
{
    public $fullname, $email, $roles, $password, $confirm_password;

    public $role = '';

    protected function rules()
    {
        return  [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:255'],
            'confirm_password' => ['required', 'same:password']
        ];
    
    }

    public function mount()
    {
        $this->roles = Role::pluck('name');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->fullname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole($this->role);

        toast('You have created a new staff', 'success');

        return redirect()->route('staff');
    }

    public function render()
    {
        return view('livewire.user.staff.create-staff');
    }
}
