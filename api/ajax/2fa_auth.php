<?php
require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';
header('Content-Type: application/json');

$user_id = $_POST['user_id'];
$token = $_POST['token'];
$code = $_POST['code'];
$auth_token = bin2hex(random_bytes(32));
$info_token = get_info_token_codes($token);
if ($info_token){
        $source_code = $info_token['code'];
        if($code === $source_code){
            $response = array('status' => 'success');
            if(set_auth_token($user_id, $auth_token)){
                setcookie('auth_token', $auth_token, time() + 3600 * 24 * 7, '/');
            }
        }
        else{
            $response = array('status' => 'error');
        }
}
else{
    $response = array('status' => 'error');
}

echo json_encode($response);