<?php

require $_SERVER['DOCUMENT_ROOT']."/api/init.php";
header('Content-Type: application/json');
$addr1 = $_POST['address1'];
$addr2 = $_POST['address2'];
$addr3 = $_POST['address3'];

$array = array(
    'address1' => $addr1,
    'address2' => $addr2,
    'address3' => $addr3
);

$json_array = json_encode($array);
if(binding_worker_withdraw_address($json_array)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}