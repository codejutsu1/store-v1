<?php

namespace App\Http\Livewire\User\Feed;

use App\Services\UploadFile;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateFeed extends ModalComponent
{
    use WithFileUploads;

    public $image, $description;

    protected $rules = [
        'image' => 'required|mimes:jpeg,jpg,png|max:200',
        'description' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(UploadFile $uploadFile)
    {
        $this->validate();

        $uploadFile->store($this->image, $this->description, 'feed');
    }
    
    public function render()
    {
        return view('livewire.user.feed.create-feed');
    }
}
