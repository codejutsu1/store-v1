<?php

namespace App\Http\Livewire\User\Cart;

use Carbon\Carbon;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCart extends Component
{
    use WithPagination;
    
    public $period = '';
    public $time;

    public function mount()
    {
        $this->reset();
        
        $this->period = 'today';
    }

    public function render()
    {
        $this->time = dateToString($this->period);

        if($this->period == 'all') {
            $orders = Order::with('order_details', 'order_status')->select(['id', 'order_id', 'status', 'created_at'])->paginate(10);
        }else {
            $orders = Order::with('order_details', 'order_status')
                            ->whereDate('created_at', '=', $this->time)
                            ->select(['id', 'order_id', 'status', 'created_at'])
                            ->paginate(10); 
        }

        return view('livewire.user.cart.show-cart', compact('orders'));
    }
}
