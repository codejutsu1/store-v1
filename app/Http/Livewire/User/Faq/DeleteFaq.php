<?php

namespace App\Http\Livewire\User\Faq;

use App\Models\Faq;
use LivewireUI\Modal\ModalComponent;

class DeleteFaq extends ModalComponent
{
    public Faq $faq;

    public function destroy()
    {
        $this->faq->delete();

        toast('You have successfully deleted the FAQ.', 'success');

        return redirect()->route('faq');
    }

    public function render()
    {
        return view('livewire.user.faq.delete-faq');
    }
}
