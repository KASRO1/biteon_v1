<?php 

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $user_info = get_user_info_by_email_or_name_or_id($email);
    if($user_info){
        $gen_code = generate_code("reset_password", $user_info['id'])[0];
        if($gen_code !== false){
           
            send_reset_password($email, $gen_code, $user_info['id']);
            echo json_encode(array('status' => 'success', 'message' => 'Reset password link has been sent to your email'));
            
        }
        
    }
    else{
        echo json_encode(array('status' => 'error', 'message' => 'No user with this email was found'));
    }


}
else{
    echo json_encode(array('status' => 'error', 'message' => 'No email was provided'));
}
