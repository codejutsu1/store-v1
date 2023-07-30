<?php

namespace App\Http\Livewire\User\Cart;

use App\Models\Order;
use Livewire\Component;
use Carbon\Carbon;

class ShowCart extends Component
{
    public $period;
    public $time;

    public function mount()
    {
        $this->period = 'today';
    }

    public function render()
    {
        $this->time = dateToString($this->period);

        $orders = Order::with('order_details', 'order_status')->select(['id', 'order_id', 'created_at'])->paginate(10);

        return view('livewire.user.cart.show-cart', compact('orders'));
    }
}
