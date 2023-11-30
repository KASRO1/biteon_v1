<?php 

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
header('Content-Type: application/json');
$password = $_POST['new_password'];
$user_id = $_POST['user_id'];
if(change_password($password, $user_id)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}
