<?php
require $_SERVER['DOCUMENT_ROOT'] . "/api/init.php";
header('Content-Type: application/json');
$pair = $_POST['pair'];
$coin = explode("_", $pair)[0];
$assets_coin = get_assets_coin($pair);
$info_coin = get_coin_info($coin);
$assets_coin["balance_info"] = get_balance_coin_this_user($info_coin['id_coin']);
$assets_coin["balance_info_usdt"] = get_balance_coin_this_user(192);
$assets_coin["coin_info"] = $info_coin;
$assets_coin["lastPrice"] = number_format((float)get_price_coin($info_coin['full_name']), 2, '.', '');;
echo json_encode($assets_coin);
