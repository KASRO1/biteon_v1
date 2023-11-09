<?php 

require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';

header('Content-Type: application/json');

$refCode = $_GET['refCode'];

$result = get_user_info_by_refcode($refCode);

if($result){
    $balance = get_total_balance_by_id($result['id']);
    $result['balance'] = number_format($balance, 2);
    echo json_encode(array('status' => 'success', 'data' => $result));
}
else{
    echo json_encode(array('status' => 'error'));
}