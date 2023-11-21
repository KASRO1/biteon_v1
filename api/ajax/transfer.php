<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

$coin_name = $_POST['coin'];
$amount = $_POST['amount'];
$user_email = $_POST['user_email'];
$user_info = get_user_info_by_email_or_name_or_id($user_email);
$user_id = $user_info['id'];

$coin_info = get_coin_info($coin_name);
$coin_id = $coin_info['id_coin'];
$balance_coin = get_balance_coin_this_user($coin_id);

if($balance_coin < $amount){
    $response['status'] = 'error';
    $response['message'] = 'Not enough balance';
    echo json_encode($response);
    exit();
}
if(transfer_balance($user_id,$coin_id, $amount)){
    $response['status'] = 'success';
    $response['message'] = 'Transfer success';
} else{
    $response['status'] = 'error';
    $response['message'] = 'Transfer error';
}
echo json_encode($response);