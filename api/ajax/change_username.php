<?php 

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
header('Content-Type: application/json');
if(change_username($_POST['new_username'])){
    echo json_encode(array('status' => 'success'));
    createActionUser("Change username");
}
else{
    echo json_encode(array('status' => 'error'));
}