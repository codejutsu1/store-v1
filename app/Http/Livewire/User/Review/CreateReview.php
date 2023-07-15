<?php

namespace App\Http\Livewire\User\Review;

use App\Models\Review;
use App\Services\UploadFile;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateReview extends ModalComponent
{
    use WithFileUploads;
    
    public $name, $comment, $image, $facebook, $twitter, $tiktok, $instagram;

    protected $rules = [
        'name' => 'required|string',
        'comment' => 'required|string',
        'image' => 'nullable|mimes:jpeg,jpg,png|max:100',
        'facebook' => 'nullable',
        'tiktok' => 'nullable',
        'twitter' => 'nullable',
        'instagram' => 'nullable'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(UploadFile $uploadFile)
    {
        $validated_data = $this->validate();
        
        if($this->image) $validated_data['image'] = $uploadFile->store($this->image, $this->name, 'review', false); 

        Review::create($validated_data);

        toast('You have created a new Review', 'success');

        return redirect()->route('review');
    }

    public function render()
    {
        return view('livewire.user.review.create-review');
    }
}
