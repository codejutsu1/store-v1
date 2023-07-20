<?php

if(!function_exists('totalPrice')){
    function totalPrice($qty, $price){
        return $qty * $price;
    }
}