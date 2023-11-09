<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$id_coin = $_POST['coin'];
header('Content-Type: application/json');
$balance = get_balance_coin_this_user($id_coin);
echo json_encode(array('status' => 'success', 'balance' => $balance));


