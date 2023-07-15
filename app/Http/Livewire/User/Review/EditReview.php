<?php

namespace App\Http\Livewire\User\Review;

use App\Models\Review;
use App\Services\UploadFile;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class EditReview extends ModalComponent
{
    use WithFileUploads;

    public Review $review;
    public $image;

    protected $rules = [
        'name' => 'required|string',
        'comment' => 'required|string',
        'image' => 'nullable|mimes:jpeg,jpg,png|max:100',
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
        
        $this->old_image = $this->review->image;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(UploadFile $uploadFile)
    {
        $validated_data = $this->validate();

        if($this->image) 
        {
            $uploadFile->remove($this->old_image, 'review');

            $validated_data['image'] = $uploadFile->store($this->image, $this->name, 'review', False);
        }

        Review::findOrFail($this->review->id)->update($validated_data);

        toast('Successfully Updated', 'success');

        return redirect()->route('review');
    }

    public function render()
    {
        return view('livewire.user.review.edit-review');
    }
}
