<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
header('Content-Type: application/json');
$coin_change_from = $_POST['coin_change_from'];
$coin_change_to = $_POST['coin_change_to'];
$amount = $_POST['amount_from'];

if(swap_balance_coin($coin_change_from, $coin_change_to, $amount)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}

