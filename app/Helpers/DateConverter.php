<?php

use Carbon\Carbon;

if(!function_exists('dateConvert')){
    function dateConvert($date){
        return date("l jS \of F Y h:i:s A", strtotime($date));
    }
}

if(!function_exists('dateToString')){
    function dateToString($date){
        $time = Carbon::now();

        if($date == 'today'){
            $time = Carbon::today()->toDateString();
        }
        else if($date == 'yesterday')
        {
            $time = Carbon::yesterday()->toDateString();
        }
        else if($date == 'week')
        {
            $time = $time->subDays(7)->toDateString();
        }
        else if($date == 'month')
        {
            $time = Carbon::now()->firstOfMonth()->toDateString();
        }else{
            $time = '';
        }

        return $time;
    }
}