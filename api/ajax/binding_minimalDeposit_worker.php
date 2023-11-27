<?php

require $_SERVER['DOCUMENT_ROOT']."/api/init.php";
header('Content-Type: application/json');

$amount = $_POST['amount'];

if(check_is_admin()){
    if (set_minimal_deposit($amount)) {
        echo json_encode(array('status' => 'success'));
    } else {
        echo json_encode(array('status' => 'error'));
    }
}
else{
    echo json_encode(array('status' => 'error'));
}