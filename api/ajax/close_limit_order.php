<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$all_orders = get_all_orders_limit();
foreach ($all_orders as $value){
    $coin = get_coin_info($value['coin_id']);
    $full_name = $coin['full_name'];
    $actual_price = get_price_coin($full_name);
    if ($actual_price >= $value['close_order_price']){
        if ($value['type_order'] === 'buy')
            swap_balance_coin($value['coin_id'], 192, $value['amount']);
        else
            swap_balance_coin(192, $value['coin_id'], $value['amount']);
        close_order($value['id']);
    }

}