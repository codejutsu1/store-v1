<?php

namespace App\Http\Livewire\User\Staff;

use App\Models\User;
use Livewire\Component;

class ToggleRole extends Component
{
    public bool $isActive;
    public string $field;
    public string $id_name;

    public function mount(User $user)
    {
        $this->user  = $user;
        
        $this->isActive = (bool) $user->hasRole($this->field);
    }

    public function render()
    {
        return view('livewire.user.staff.toggle-role');
    }

    public function updating($field, $value)
    {
        if($value) $this->user->assignRole($this->field); else $this->user->removeRole($this->field);
    }
}
