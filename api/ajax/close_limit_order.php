<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$all_orders = get_all_orders();
foreach ($all_orders as $value){
    $coin = get_coin_info_by_id($value['coin_id']);
    $full_name = $coin['full_name'];
    $actual_price = get_price_coin($full_name);
    if ($actual_price >= $value['close_order_price']){
        swap_balance_coin($value['coin_id'], 192, $value['amount']);
        close_order($value['id']);
    }

}