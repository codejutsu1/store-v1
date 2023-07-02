<?php

namespace App\Http\Livewire\User\Faq;

use LivewireUI\Modal\ModalComponent;

class CreateFaq extends ModalComponent
{
    public function render()
    {
        return view('livewire.user.faq.create-faq');
    }
}
