<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');

$spot = $_POST['spot'];
$futures = $_POST['futures'];
$withdraw = $_POST['withdraw'];

if (create_api_key($spot, $futures, $withdraw)) {
    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}
