<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$invoice_id = isset($_POST['invoice_id']) ? $_POST['invoice_id'] : $_GET['invoice_id'];
$order_id = isset($_POST['order_id']) ? $_POST['order_id'] : $_GET['order_id'];
$status = isset($_POST['status']) ? $_POST['status'] : $_GET['status'];
$paymentInfo = getPaymentData($order_id);
updatePaymentStatus($order_id, $status);
if($status == "1"){
    add_balance_userID($paymentInfo['user_id'], 192, $paymentInfo['amount']);
}
