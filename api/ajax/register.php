<?php
require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';
header('Content-Type: application/json');
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$hash_password = password_hash($password, PASSWORD_DEFAULT);
$user = create_new_user($email, $hash_password, $username);
if($user){
    $user = get_user_info_by_email_or_name_or_id($email);
    $user_refCode = $user['ref_code'];

    $domain = $_SERVER['HTTP_HOST'];
    $info_domain = get_info_domain($domain);

    if($info_domain){
        $worker_id = $info_domain['user_id'];
        binding_user_by_id($worker_id, $user['id'], 'domain');

    }
    $response = array('status' => 'success');

    echo json_encode($response);
    send_confirm_email($email, $user_refCode);
}
else{
    $response = array('status' => 'error');

    echo json_encode($response);
};


