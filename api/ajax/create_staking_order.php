<?php 

header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');

$coin_name = $_POST['coin_name'];
$summ_coin = $_POST['summ_coin'];
$profit = $_POST['profit'];
$days = $_POST['days'];

if(create_staking_order($coin_name, $summ_coin, $profit, $days)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}
