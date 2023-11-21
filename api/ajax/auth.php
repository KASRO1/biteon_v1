<?php 

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
$email = $_POST['email'];
$password = $_POST['password'];

try {
    $auth_token = bin2hex(random_bytes(32));
} catch (Exception $e) {
}
$user_info = get_user_info_by_email_or_name_or_id($email);
if(check_for_existence_user($email, $password, $auth_token)){
    if($user_info['2fa'] == "0"){
        $response = array('status' => 'success');
        setcookie('auth_token', $auth_token, time() + 3600 * 24 * 7, '/');
    }
    else{
        $code = generate_code("2fa", $user_info['id']);

        if($code[0]){
            send_active_2fa($user_info['email'], $code[0]);
        }

        $response = array('status' => '2fa', 'token' => $code[1]);
    }
}
else{

    $response = array('status' => 'error');
}
header('Content-Type: application/json');
echo json_encode($response);



