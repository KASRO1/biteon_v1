<?php 

header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');

$coin_name = $_POST['coin_name'];

$course = get_price_coin($coin_name);
echo json_encode(array('status' => 'success', 'course' => $course));