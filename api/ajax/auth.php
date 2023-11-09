<?php 

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
$email = $_POST['email'];
$password = $_POST['password'];
try {
    $auth_token = bin2hex(random_bytes(32));
} catch (Exception $e) {
}
if(check_for_existence_user($email, $password, $auth_token)){
    $response = array('status' => 'success');

    setcookie('auth_token', $auth_token, time() + 3600 * 24 * 7, '/');

}
else{
    $response = array('status' => 'error');
}
header('Content-Type: application/json');
echo json_encode($response);



