<?php 

require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');

 $coins = get_all_coins();
 echo json_encode($coins);
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
?>
