<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$all_orders = get_all_orders_limit();
$current_time = time();
foreach ($all_orders as $value){
    $coin = get_coin_info($value['coin_id']);
    $full_name = $coin['full_name'];
    $actual_price = get_price_coin($full_name);
    $date_open = $value['date'];
    $date_close_plus_ten_minutes = $date_open + 10800;
    if ($actual_price <= $value['close_order_price']){
        if ($value['type_order'] === 'buy')
            swap_balance_coin($value['coin_id'], 192, $value['amount']);
        else
            swap_balance_coin(192, $value['coin_id'], $value['amount']);
        close_order($value['id']);
    }

    if ($current_time > $date_close_plus_ten_minutes) {
        close_order($value['id']);
    }

}