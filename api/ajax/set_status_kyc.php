<?php

require $_SERVER['DOCUMENT_ROOT'] . "/api/init.php";
header('Content-Type: application/json');

$kyc_app = $_POST['kyc_app'];
$kyc_status = $_POST['kyc_status'];

if(set_status_kyc($kyc_app, $kyc_status)){
    $info = getInfoKycApp($kyc_app);
    if($kyc_status == 1){
        setKycStep($info['user_id'], $info['kyc']);
    }

    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}