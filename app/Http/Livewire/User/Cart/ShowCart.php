<?php

namespace App\Http\Livewire\User\Cart;

use Carbon\Carbon;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCart extends Component
{
    use WithPagination;
    
    public $period, $time, $search;

    public function mount()
    {   
        $this->period = 'today';
    }

    public function render()
    {
        $this->time = dateToString($this->period);

        $search = "%$this->search%" ?? '';

        if($this->period == 'all') {
            $orders = Order::where('order_id', 'LIKE', $search)
                            ->with('order_details', 'order_status')
                            ->select(['id', 'order_id', 'status', 'created_at'])
                            ->paginate(10);
        }elseif($this->period == 'today' || $this->period == 'yesterday') {
            $orders = Order::where('order_id', 'LIKE', $search)
                            ->with('order_details', 'order_status')
                            ->whereDate('created_at', '=', $this->time)
                            ->select(['id', 'order_id', 'status', 'created_at'])
                            ->paginate(10); 
        }else {
            $orders = Order::where('order_id', 'LIKE', $search)
                            ->with('order_details', 'order_status')
                            ->whereDate('created_at', '>=', $this->time)
                            ->select(['id', 'order_id', 'status', 'created_at'])
                            ->paginate(10); 
        }

        return view('livewire.user.cart.show-cart', compact('orders'));
    }
}
