<?php 

require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
header('Content-Type: application/json');
$status = $_POST['status'];
$id = $_POST['id'];

if(change_status_api_key($id, $status)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}