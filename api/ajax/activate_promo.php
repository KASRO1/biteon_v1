<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');
$promo = $_POST['promo'];
$info_promo = get_info_promo($promo);
if($info_promo){
    if (binding_user_by_promo($promo)){
        add_balance_user($info_promo['coin_id'], $info_promo['amount']);
        echo json_encode(array('status' => 'success', 'message' => $info_promo['text']));
    }
    else{
        echo json_encode(array('status' => 'error', 'message' => 'Promocode already activated'));
    }


}
else{
    echo json_encode(array('status' => 'error', 'message' => 'Promocode not found'));
}