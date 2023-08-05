<?php

namespace App\Http\Livewire\User\Staff;

use id;
use App\Models\User;
use Spatie\Permission\Models\Role;
use LivewireUI\Modal\ModalComponent;

class EditStaff extends ModalComponent
{
    protected function rules()
    {
        return  [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->user_id],
        ];
    
    }

    public function mount(User $staff)
    {
        $this->user_id = $staff->id;

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

        User::findOrFail($this->user_id)->update([
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
