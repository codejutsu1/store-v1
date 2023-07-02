<?php

namespace App\Http\Livewire\User\Faq;

use App\Models\Faq;
use LivewireUI\Modal\ModalComponent;

class FaqEdit extends ModalComponent
{
    public Faq $faq;
    public $question;
    public $answer;

    protected $rules = [
        'question' => 'required|string',
        'answer' => 'required|string'
    ];

    public function mount()
    {
        $this->question = $this->faq->question;
        $this->answer = $this->faq->answer;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        Faq::findOrFail($this->faq->id)->update($validated_data);

        toast('Successfully Updated', 'success');

        // alert()->success('Successful', 'You have created a new FAQ');

        return redirect()->route('faq');
    }
    
    public function render()
    {
        return view('livewire.user.faq.faq-edit');
    }
}
