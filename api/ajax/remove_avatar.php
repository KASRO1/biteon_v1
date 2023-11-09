<?php

require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
header('Content-Type: application/json');
if(change_avatar(true)){
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}