<?php

namespace App\Http\Livewire\User\Cart;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ToggleDeliver extends Component
{
    public Model $model;
    public bool $isActive;
    public string $field;

    public function mount()
    {
        $this->isActive = (bool) $this->model->order_status->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.user.cart.toggle-deliver');
    }

    public function updating($field, $value)
    {
        $this->model->order_status->setAttribute($this->field, $value)->save();

        if($value == true) $this->model->order_status->setAttribute('user_id', auth()->user()->id)->save();
    }
}
