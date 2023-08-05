<?php

namespace App\Http\Livewire\User\Staff;

use id;
use App\Models\User;
use Spatie\Permission\Models\Role;
use LivewireUI\Modal\ModalComponent;

class EditStaff extends ModalComponent
{
    public $user;

    protected function rules()
    {
        return  [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->user->id],
            'role' => ['required', 'string', 'max:255'],
        ];
    
    }

    public function mount(User $staff)
    {

        $this->user = $staff;

        $this->fullname = $staff->name;

        $this->email = $staff->email;

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        User::findOrFail($this->user->id)->update([
            'name' => $this->fullname,
            'email' => $this->email,
        ]);

        toast('You have updated this Staff', 'success');

        return redirect()->route('staff');
    }

    public function render()
    {
        return view('livewire.user.staff.edit-staff');
    }
}
