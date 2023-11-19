<?php
require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';
header('Content-Type: application/json');



if(enable_or_disable_2fa() === "enable"){
    $response = array('status' => 'success');
}
else{
    $response = array('status' => 'error');
}
echo json_encode($response);