<?php 
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$coin1 = $_POST['coin1'];
$coin2 = $_POST['coin2'];
$amount = $_POST['amount'];

$course = convertCryptoPrice($amount, $coin1, $coin2);
echo json_encode(array('status' => 'success', 'course' => $course));
