<?php

namespace App\Http\Livewire\User\Staff;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteStaff extends ModalComponent
{
    public User $staff;

    public function destroy()
    {
        $this->staff->delete();

        toast('You have successfully deleted this staff.', 'success');

        return redirect()->route('staff');
    }

    public function render()
    {
        return view('livewire.user.staff.delete-staff');
    }
}
