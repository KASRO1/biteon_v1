<?php
header('Content-Type: application/json');
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
$promo = $_POST['promo'];
if (delete_promo_id($promo)){
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}