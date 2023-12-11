<?php

require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
header('Content-Type: application/json');
if(change_avatar(true)){
    createActionUser("Delete avatar");
    echo json_encode(array('status' => 'success'));
}
else{
    echo json_encode(array('status' => 'error'));
}