<?php

namespace App\Services;

use App\Models\Category;
use App\Models\OrderDetail;
use App\Interfaces\Storable;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderDetailStore implements Storable
{
    public function store($orderId, $orders)
    {
        $cart_contents = Cart::content();
        
       if($cart_contents)
       {
            foreach($cart_contents as $cart)
            {
                foreach($cart->options as $item)
                {
                    $category = Category::where('id', $item->category_id)->value('name');

                    OrderDetail::create([
                        'order_id' => $orderId,
                        'product_name' => $cart->name,
                        'category' => $category,
                        'selling_price' => $cart->price,
                        'original_price' => $item->original_price,
                        'quantity' => $cart->qty,
                        'total_price' => totalPrice($cart->qty, $cart->price),
                    ]);
                }
            }
       }

        return '';


        //For the api
        // OrderDetail::create([
        //     'order_id' => $order->id,
        //     'product_name' => $orders['data']['metadata']['cart_content']['name'],
        //     'category' => $orders['data']['metadata']['cart_content']['category'],
        //     'selling_price' => $orders['data']['metadata']['cart_content']['selling_price'], //total price of commodity.
        // ]);
    }
}