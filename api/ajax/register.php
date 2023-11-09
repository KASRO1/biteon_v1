<?php
require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$hash_password = password_hash($password, PASSWORD_DEFAULT);
if(create_new_user($email, $hash_password, $username)){
    
    $response = array('status' => 'success');
}
else{
    $response = array('status' => 'error');
};


header('Content-Type: application/json');
echo json_encode($response);