<?php 

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
header('Content-Type: application/json');
$password = $_POST['new_password'];
if(change_password($password)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}
