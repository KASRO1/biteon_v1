<?php


require $_SERVER['DOCUMENT_ROOT'] . "/api/init.php";
header('Content-Type: application/json');

$coin = $_POST['coin'];
$address = $_POST['address'];


if (check_is_admin()) {
    if (setAddressCoin($coin, $address)) {
        echo json_encode(array('status' => 'success'));
    } else {
        echo json_encode(array('status' => 'error'));
    }
} else {
    echo json_encode(array('status' => 'error'));
}