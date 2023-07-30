<?php

namespace App\Http\Livewire\User\Cart;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ToggleReady extends Component
{
    public Model $model;
    public bool $isActive;
    public string $field;

    public function mount()
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.user.cart.toggle-ready');
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }
}
