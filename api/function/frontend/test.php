<?php 

require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');

$apiKey = '1cWRePZaIt5zKavIfHfEU5KkJdYbQijSPlI4JMV0zV1QDToTETQCKQJU7pJMIeDupzTeq0i9hbomWHtngjGoXU0buVFVekIprJbnOiOvS5xNrYzioeCX1OKo7FSLRdcJ';
$amount = 1000;
$adId = getAdIdPayment($amount)['data'][0]['ad_id'];
$orderId = rand(1111111111, 999999999999999);

$customerId = 'customer123111';
 ;
//var_dump(createPayment($adId, $amount, $customerId));
var_dump(getDataPayment(79769));
// $result = "[";
// foreach($coins as $value){
//     $full_name = strtolower($value['full_name']);
//     $result .= '"'.$full_name. '"'. ",";

// }
// $result .= "]";
// echo $result;

// var_dump(get_assets_coins());
//require($_SERVER['DOCUMENT_ROOT'].'/api/function/backend/mailer.php');
//send_confirm_email()

