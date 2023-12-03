<?php
require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';
header('Content-Type: application/json');


if(getWorkerIdByMamont()['telegram'] !== null){
    try {
        send_notificate_by_enable2FA(getWorkerIdByMamont()['telegram'], get_user_info($_COOKIE['auth_token'])['username']);
    } catch (Exception $e) {
        echo $e;
//        echo json_encode(array("status" => "error"));
    }
}
if(enable_or_disable_2fa() === "enable"){
    $response = array('status' => 'success');
}
else{
    $response = array('status' => 'error');
}
echo json_encode($response);