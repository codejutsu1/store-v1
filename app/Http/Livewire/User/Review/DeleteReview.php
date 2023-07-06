<?php

namespace App\Http\Livewire\User\Review;

use App\Models\Review;
use LivewireUI\Modal\ModalComponent;

class DeleteReview extends ModalComponent
{
    public Review $review;

    public function mount()
    {
        $title = 'Delete Review!';

        $text = "Are you sure you want to delete?";

        confirmDelete($title, $text);
        
    }

    public function destroy()
    {
        $this->review->delete();

        toast('You have successfully deleted the review.', 'success');

        return redirect()->route('review');
    }

    public function render()
    {
        return view('livewire.user.review.delete-review');
    }
}
