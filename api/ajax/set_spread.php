<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

if(!check_is_admin()) {
    echo json_encode(array('status' => 'error'));
    exit;
}

$spread = $_POST['amount'];
$CoinName = $_POST['network'];


if(set_spread($CoinName, $spread)) {
    echo json_encode(array('status' => 'success'));
}
else {
    echo json_encode(array('status' => 'err1or'));
}
