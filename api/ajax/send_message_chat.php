<?php 

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

$message = $_POST['message'];
$chat_id = $_POST['chat_id'] ;
if($chat_id === "NONE"){
    create_chat();
}
//else{
////    if(send_message_chat($message, $chat_id)){
////        echo json_encode(array("status" => "success"));
////    } else {
////        echo json_encode(array("status" => "error"));
////    }
//}


