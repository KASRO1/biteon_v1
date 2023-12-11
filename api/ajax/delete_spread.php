<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
if(check_is_admin()){
    $id = $_GET['id'];
    $result = deleteSpread($id);
    echo json_encode($result);
}
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';


header("Location: $referer");