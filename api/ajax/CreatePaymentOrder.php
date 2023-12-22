<?php

require $_SERVER['DOCUMENT_ROOT'] . "/api/init.php";
header('Content-Type: application/json');
if(!isAuth()){
    return header("Location: /login");
}
$amount = $_POST['amount'];
$user = get_user_info($_COOKIE['auth_token']);
$payment = createPayment(rand(1111111, 9999999), $amount, $user['id']);

if($payment){

   echo json_encode(["status"=>"success", "url"=>$payment['url']]);
}
else{
    echo json_encode(["status"=>"error"]);
}
