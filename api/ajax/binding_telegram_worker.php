<?php
require $_SERVER['DOCUMENT_ROOT']. "/api/init.php";
header('Content-Type: application/json');
$chat_id = $_POST['chat_id'];

if(binding_worker_telegram($chat_id)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}