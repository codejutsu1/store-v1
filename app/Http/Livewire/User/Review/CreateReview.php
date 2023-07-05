<?php

namespace App\Http\Livewire\User\Review;

use LivewireUI\Modal\ModalComponent;

class CreateReview extends ModalComponent
{
    public function render()
    {
        return view('livewire.user.review.create-review');
    }
}
