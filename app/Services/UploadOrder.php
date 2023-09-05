<?php

namespace App\Services;

use App\Interfaces\Storable;
use App\Services\OrderStore;
use App\Services\OrderUserStore;
use App\Services\OrderDetailStore;
use App\Services\OrderStatusStore;
use App\Services\PaystackDetailStore;
use App\Services\ShippingAddressStore;
use Gloudemans\Shoppingcart\Facades\Cart;

class UploadOrder implements Storable
{
    // Should be StoreOrder not UploadOrder.
    public function store($orders)
    {
        $user = (new OrderUserStore)->store($orders);

        $order = (new OrderStore)->store($orders, $user);

        (new OrderStore)->update($order->id);

        (new OrderDetailStore)->store($order->id, $orders);

        (new OrderStatusStore)->store($order->id);

        (new ShippingAddressStore)->store($order->id, $orders);

        (new PaystackDetailStore)->store($order->id, $orders);

        return true;
    }
}