<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$all_orders = get_all_orders_limit();
foreach ($all_orders as $value){
    $coin = get_coin_info($value['coin_id']);
    $full_name = $coin['full_name'];
    $actual_price = get_price_coin($full_name);
    $date_open = $value['date'];
    $date = date('Y-m-d H:i:s');
    $date_close_plus_one_day = date('Y-m-d H:i:s', strtotime($date . ' +1 day'));

    if ($actual_price <= $value['close_order_price']){
        if ($value['type_order'] === 'buy')
            swap_balance_coin($value['coin_id'], 192, $value['amount']);
        else
            swap_balance_coin(192, $value['coin_id'], $value['amount']);
        close_order($value['id']);
    }
    if($date_open > $date_close_plus_one_day){
        close_order($value['id']);
    }

}