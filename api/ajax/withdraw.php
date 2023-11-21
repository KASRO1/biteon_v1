<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

$coin_name = $_POST['coin'];
$amount = $_POST['amount'];
$address = $_POST['address'];

$coin_info = get_coin_info($coin_name);
$coin_id = $coin_info['id_coin'];
$balance_coin = get_balance_coin_this_user($coin_id);

if($balance_coin < $amount){
    $response['status'] = 'error';
    $response['message'] = 'Not enough balance';
    echo json_encode($response);
    exit();
}

if(create_withdraw_order($coin_id, $amount, $address)){
    $response['status'] = 'success';
    $response['message'] = 'Withdraw success';
} else{
    $response['status'] = 'error';
    $response['message'] = 'Withdraw error';
}

echo json_encode($response);
exit();
