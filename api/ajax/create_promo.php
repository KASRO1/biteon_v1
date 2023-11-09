<?php 
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');

$promocode = $_POST['promocode'];
$coinName= $_POST['coin_name'];
$amount = $_POST['amount'];
$promo_text = $_POST['promo_text'];

if(create_promocode($amount, $coinName, $promo_text, $promocode)){
    echo json_encode(array("status" => "success", "message" => "Промокод успешно создан"));
} else {
    echo json_encode(array("status" => "error", "message" => "Промокод не создан. Попробуйте еще раз"));
}
