<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$coinName = $_POST['coinName'];
$coinID = get_coin_info($coinName);
$amount = $_POST['amount'];
$price = $_POST['price'];
$type_order = $_POST['type_order'];
$order_id = create_order($price, $price, $amount, $coinID, $type_order, "market");
if($order_id){
    if(swap_balance_coin($coinID, 192, $amount)){
        if (close_order($order_id)){
            echo json_encode(array('status' => 'success'));
        }
        else{
            echo json_encode(array('status' => 'error'));
        }
    }
    else{
        echo json_encode(array('status' => 'error'));
    }
}
else{
    echo json_encode(array('status' => 'error'));
}
