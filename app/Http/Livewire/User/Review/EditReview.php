<?php

namespace App\Http\Livewire\User\Review;

use App\Models\Review;
use LivewireUI\Modal\ModalComponent;

class EditReview extends ModalComponent
{
    public Review $review;

    protected $rules = [
        'name' => 'required|string',
        'comment' => 'required|string',
        'facebook' => 'nullable',
        'tiktok' => 'nullable',
        'twitter' => 'nullable',
        'instagram' => 'nullable'
    ];

    public function mount()
    {
        $this->name = $this->review->name;

        $this->comment = $this->review->comment;

        $this->facebook = $this->review->facebook;

        $this->twitter = $this->review->twitter;

        $this->instagram = $this->review->instagram;

        $this->tiktok = $this->review->tiktok;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        Review::findOrFail($this->review->id)->update($validated_data);

        toast('Successfully Updated', 'success');

        return redirect()->route('review');
    }

    public function render()
    {
        return view('livewire.user.review.edit-review');
    }
}
