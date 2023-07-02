<?php

namespace App\Http\Livewire\User\Faq;

use LivewireUI\Modal\ModalComponent;

class FaqEdit extends ModalComponent
{
    public function render()
    {
        return view('livewire.user.faq.faq-edit');
    }
}
