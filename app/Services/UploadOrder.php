<?php

namespace App\Services;

use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use App\Models\OrderDetail;
use App\Models\OrderStatus;
use App\Models\PaystackDetail;
use App\Models\ShippingAddress;
use Gloudemans\Shoppingcart\Facades\Cart;

class UploadOrder 
{
    public function store($orders)
    {
        $user_name = $orders['data']['metadata']['billing_address']['first_name'] . ' ' . $orders['data']['metadata']['billing_address']['last_name'];
        $user_email = $orders['data']['metadata']['billing_address']['email'];
        $cart_contents = Cart::content();

        $user = OrderUser::create([
            'name' => $user_name,
            'email' => $user_email,
        ]);

        $order = Order::create([
            'order_user_id' => $user->id,
            'order_id' => '',
            'status' => $orders['data']['status'],
            'total_price' => floatval(Cart::subtotal()) * 1000,
            'additional_information' => $orders['data']['metadata']['billing_address']['additional_information'],
        ]);

        $orderId = createOrderId($orders['data']['metadata']['billing_address']['area'], $order->id);

        Order::findOrFail($order->id)->update([
            'order_id' => $orderId,
        ]);

        foreach($cart_contents as $cart)
        {
            foreach($cart->options as $item)
            {
                $category = Category::where('id', $item->category_id)->value('name');

                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_name' => $cart->name,
                    'category' => $category,
                    'selling_price' => $cart->price,
                    'original_price' => $item->original_price,
                    'quantity' => $cart->qty,
                    'total_price' => totalPrice($cart->qty, $cart->price),
                ]);
            }
        }

        OrderStatus::create([
            'order_id' => $order->id,
        ]);

        ShippingAddress::create([
            'order_id' => $order->id,
            'lodge' => $orders['data']['metadata']['billing_address']['lodge'],
            'area' => $orders['data']['metadata']['billing_address']['area'],
            'phone' => $orders['data']['metadata']['billing_address']['tel'],
            'state' => 'Imo'
        ]);

        PaystackDetail::create([
            'order_id' => $order->id,
            'paystack_id' => $orders['data']['id'],
            'domain' => $orders['data']['domain'],
            'status' => $orders['data']['status'],
            'reference' => $orders['data']['reference'],
            'amount' => $orders['data']['amount'],
            'gateway_response' => $orders['data']['gateway_response'],
            'ip_address' => $orders['data']['ip_address'],
            'fees' => $orders['data']['fees'],
            'authorization_code' => $orders['data']['authorization']['authorization_code'],
            'brand' => $orders['data']['authorization']['brand'],
            'card_type' => $orders['data']['authorization']['card_type'],
            'bank' => $orders['data']['authorization']['bank'],
        ]);

        return true;
    }
}