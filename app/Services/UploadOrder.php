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
        $user_name = $orders['data']['metadata']['billing_address']['first_name'] . '' . $orders['data']['metadata']['billing_address']['last_name'];
        $user_email = $orders['data']['metadata']['billing_address']['email'];
        $cart_contents = Cart::content();

        $user = User::create([
            'name' => $user_name,
            'email' => $user_email,
            'password' => '123456',
        ]);

        $order = Order::create([
            'user_id' => $user->id,
            'status' => $orders['data']['status'],
            'total_price' => floatval(Cart::subtotal()) * 1000
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
                    'additional_information' => $orders['data']['metadata']['billing_address']['additional_information'],
                ]);
            }
        }

        OrderStatus::create([
            'order_id' => $order->id,
            'user_id' => $user->id
        ]);

        ShippingAddress::create([
            'order_id' => $order->id,
            'lodge' => $orders['data']['metadata']['billing_address']['lodge'],
            'area' => $orders['data']['metadata']['billing_address']['area'],
            'tel' => $orders['data']['metadata']['billing_address']['phone'],
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