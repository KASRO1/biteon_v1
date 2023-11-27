<?php

require $_SERVER['DOCUMENT_ROOT']."/api/init.php";
header('Content-Type: application/json');

$withdraw_error = $_POST['trading_error'];
$verif_error = $_POST['verif_error'];

if(set_tradingError_and_verifError($withdraw_error, $verif_error)) {
    echo json_encode(array('status' => 'success'));
}
else {
    echo json_encode(array('status' => 'error'));
}
