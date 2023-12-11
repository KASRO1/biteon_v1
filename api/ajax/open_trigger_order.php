<?php


require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');
$coinName = $_POST['coinName'];
$coinID = get_coin_info($coinName)['id_coin'];
$amount = $_POST['amount'];
$price = $_POST['price'];
$close_order_price = $_POST['close_order_price'];
$type_order = $_POST['type_order'];

    $order_id = create_order($price, $close_order_price, $amount, $coinID, $type_order, "trigger");

    if($order_id){
        createActionUser("Create trigger order");
        echo json_encode(array('status' => 'success'));
    }
    else{
        echo json_encode(array('status' => 'error'));
    }


