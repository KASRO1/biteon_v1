<?php
require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$hash_password = password_hash($password, PASSWORD_DEFAULT);
$user = create_new_user($email, $hash_password, $username);
if($user){

    $user_refCode = $user['ref_code'];
    send_confirm_email($email, $user_refCode);
    $domain = $_SERVER['HTTP_HOST'];
    $info_domain = get_info_domain($domain);
    if($info_domain){
        $worker_id = $info_domain['user_id'];
        binding_user_by_id($worker_id, $user['id']);
    }
    $response = array('status' => 'success');
}
else{
    $response = array('status' => 'error');
};


header('Content-Type: application/json');
echo json_encode($response);