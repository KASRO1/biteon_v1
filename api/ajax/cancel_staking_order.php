<?php

header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');

$id = $_POST['id'];
if(cancel_staking_order($id)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}