<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

$message = $_POST['message'];
$chat_id = $_POST['chat_id'];


if (send_message($chat_id, $message)) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error"));
}



