<?php 

require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
header('Content-Type: application/json');
$id = $_POST['id'];

if(delete_api_key($id)){
    createActionUser("Delete API key");
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}