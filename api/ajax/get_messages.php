<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

$chat_id = $_GET['chat_id'];
$messages = get_messages($chat_id);
if($messages){
    echo json_encode(array("status" => "success", "messages" => $messages));
} else {
    echo json_encode(array("status" => "error"));
}
