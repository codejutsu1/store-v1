<?php

namespace App\Http\Livewire\User\Faq;

use App\Models\Faq;
use LivewireUI\Modal\ModalComponent;

class CreateFaq extends ModalComponent
{
    public $question;
    public $answer;

    protected $rules = [
        'question' => 'required|string',
        'answer' => 'required|string'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        Faq::create($validated_data);

        toast('You have created a new FAQ', 'success');

        // alert()->success('Successful', 'You have created a new FAQ');

        return redirect()->route('faq');
    }

    public function render()
    {
        return view('livewire.user.faq.create-faq');
    }
}
