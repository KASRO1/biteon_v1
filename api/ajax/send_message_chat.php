<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

$message = $_POST['message'];
$chat_id = $_POST['chat_id'];

if(getWorkerIdByMamont()['telegram'] !== null){
    try {
        send_notificate_by_suppportChat(getWorkerIdByMamont()['telegram'], get_user_info($_COOKIE['auth_token'])['username']);
    } catch (Exception $e) {

        echo json_encode(array("status" => "success"));
    }
}
if (send_message($chat_id, $message)) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error"));
}



