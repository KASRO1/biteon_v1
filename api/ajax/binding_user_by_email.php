<?php

require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';
header('Content-Type: application/json');
$email = $_POST['email'];

if(binding_user_by_email($email)){

    $response = array('status' => 'success', 'message' => "Пользователь с email '$email' успешно привязан");
}
else{
    $response = array('status' => 'error', 'message' => "Пользователь с email '$email' не найден");
};
echo json_encode($response);