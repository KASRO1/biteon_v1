<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";
header('Content-Type: application/json');


$week1 = $_POST['1week'];
$week2 = $_POST['2week'];
$mouth1 = $_POST['1mouth'];
$mouth3  = $_POST['3month'];


$array = array(
    'week1' => $week1,
    'week2' => $week2,
    'mouth1' => $mouth1,
    'mouth3' => $mouth3
);

$json_array = json_encode($array);
if(check_is_admin()){
    if (set_stakingPercent($json_array)) {
        echo json_encode(array('status' => 'success'));
    } else {
        echo json_encode(array('status' => 'error'));
    }
}
else{
    echo json_encode(array('status' => 'error'));
}