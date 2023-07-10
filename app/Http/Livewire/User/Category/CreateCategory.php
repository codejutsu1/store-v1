<?php

namespace App\Http\Livewire\User\Category;

use LivewireUI\Modal\ModalComponent;

class CreateCategory extends ModalComponent
{
    public $name;
    
    public function render()
    {
        return view('livewire.user.category.create-category');
    }
}
