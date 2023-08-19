<?php

if(!function_exists('createOrderId')){
    function createOrderId($order_address, $order_id){

        $alpha = "ABCDEFGHIJ123456";

        $number = substr(str_shuffle("28013"), 0, 2);

        $new_alpha = substr(str_shuffle($alpha), 0, 4);

        $location = strtoupper(substr($order_address, 0, 1));

        $orderId = 'KS'.$location.'-' . $new_alpha . '-' . $order_id . $number;

        return $orderId;
    }
}