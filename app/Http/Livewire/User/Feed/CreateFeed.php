<?php

namespace App\Http\Livewire\User\Feed;

use LivewireUI\Modal\ModalComponent;

class CreateFeed extends ModalComponent
{
    public $image;
    public $description;

    protected $rules = [
        'description' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function render()
    {
        return view('livewire.user.feed.create-feed');
    }
}
