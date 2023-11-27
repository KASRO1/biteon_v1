<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";
header('Content-Type: application/json');

$withdraw_error = $_POST['withdraw_error'];
$minLimit = $_POST['minLimit'];

if(set_withdraw_error($withdraw_error) && set_minLimit($minLimit)) {
    echo json_encode(array('status' => 'success'));
}
else {
    echo json_encode(array('status' => 'error'));
}