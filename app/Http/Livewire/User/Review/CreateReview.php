<?php

namespace App\Http\Livewire\User\Review;

use App\Models\Review;
use LivewireUI\Modal\ModalComponent;

class CreateReview extends ModalComponent
{
    public $name, $comment, $facebook, $twitter, $tiktok, $instagram;

    protected $rules = [
        'name' => 'required|string',
        'comment' => 'required|string',
        'facebook' => 'nullable',
        'tiktok' => 'nullable',
        'twitter' => 'nullable',
        'instagram' => 'nullable'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        Review::create($validated_data);

        toast('You have created a new Review', 'success');

        return redirect()->route('review');
    }

    public function render()
    {
        return view('livewire.user.review.create-review');
    }
}
