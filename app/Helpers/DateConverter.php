<?php

if(!function_exists('dateConvert')){
    function dateConvert($date){
        return date("l jS \of F Y h:i:s A", strtotime($date));
    }
}