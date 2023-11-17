<?php

function create_new_user($email, $hash_password, $username)
{
    $mysql = new mysqli(servername, username, password, dbname);
    $date = date('Y-m-d H:i:s');
    $standard_avatar = '{"image_url": "/assets/users_avatars/standard_avatar.png"}';
    $ref_code = mt_rand(10000000, 99999999);
    
    $result = $mysql->query("INSERT INTO `users`(`email`, `username`, `ref_code`, `password`, `kyc_step`, `last_online`, `2fa`,`email_verif`, `avatar`, `user_status`, `auth_token`, `created_date`) VALUES ('$email','$username','$ref_code','$hash_password','0','$date','0','0','$standard_avatar','user','NULL', '$date')");
    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function check_for_existence_user($email, $hash_password, $auth_token): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $user = $result->fetch_assoc();
    if (password_verify($hash_password, $user['password'])) {

        $mysql->query("UPDATE `users` SET `auth_token` = '$auth_token' WHERE `email` = '$email' AND `email_verif` =  '1' ");

        return true;
    } else {
        return false;
    }
}
function get_user_info_by_email_or_name($email_or_name)
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email_or_name' OR `username` = '$email_or_name' OR `id` = '$email_or_name'");
    $user = $result->fetch_assoc();
    if ($user) {
        return $user;
    } else {
        return false;
    }
}
function get_user_info($auth_token)
{
    if($auth_token === "") return false;
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("SELECT * FROM `users` WHERE `auth_token` = '$auth_token'");
    $user = $result->fetch_assoc();
    $mysql->query("UPDATE `users` SET `last_online` = '" . date('Y-m-d H:i:s') . "' WHERE `auth_token` = '$auth_token'");
    if ($user) {
        $user['avatar'] = json_decode($user['avatar'], true)['image_url'];
    }
    return $user;
}
function get_user_info_by_refcode($ref_code): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("SELECT * FROM `users` WHERE `ref_code` = '$ref_code'");
    $user = $result->fetch_assoc();
    if ($user) {
        $user['avatar'] = json_decode($user['avatar'], true)['image_url'];
        $user['auth_token'] = "";
    }
    return $user;

}
function change_avatar($remove = false, $avatar = ""): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $auth_token = $_COOKIE['auth_token'];
    $current_avatar = $mysql->query("SELECT `avatar` FROM `users` WHERE `auth_token` = '$auth_token'")->fetch_assoc()['avatar'];
    $current_avatar = json_decode($current_avatar, true);

    if($remove) {
        $standard_avatar = '{"image_url": "/assets/users_avatars/standard_avatar.png"}';
        $result = $mysql->query("UPDATE `users` SET `avatar` = '$standard_avatar' WHERE `auth_token` = '$auth_token'");
    } else {
        if ($current_avatar['image_url'] != '/assets/users_avatars/standard_avatar.png') {
            unlink($_SERVER['DOCUMENT_ROOT'] . $current_avatar['image_url']);
        }
        $result = $mysql->query("UPDATE `users` SET `avatar` = '$avatar' WHERE `auth_token` = '$auth_token'");
    }
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function change_username($new_username): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $auth_token = $_COOKIE['auth_token'];
    $result = $mysql->query("UPDATE `users` SET `username` = '$new_username' WHERE `auth_token` = '$auth_token'");
    if ($result) {
        return true;
    } else {
        return false;
    }
}
function change_password($new_password): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $auth_token = $_COOKIE['auth_token'];
    $hash_password = password_hash($new_password, PASSWORD_DEFAULT);
    $result = $mysql->query("UPDATE `users` SET `password` = '$hash_password' WHERE `auth_token` = '$auth_token'");
    if ($result) {
        return true;
    } else {
        return false;
    }
}

/**
 * @throws Exception
 */
function create_api_key($spot = false, $futures = false, $withdraw = false): bool
{
    $mysql = new mysqli(servername, username, password, dbname);

    $auth_token = bin2hex(random_bytes(32));
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    $result = $mysql->query("INSERT INTO `api_keys`(`user_id`,`status`, `token`, `spot_trade`, `futures_trade`, `withdraw`) VALUES ('$user_id','true','$auth_token','$spot','$futures','$withdraw')");
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function get_api_keys(): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    return $mysql->query("SELECT * FROM `api_keys` WHERE `user_id` = '$user_id'")->fetch_all();
}

function change_status_api_key($id, $status): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("UPDATE `api_keys` SET `status` = '$status' WHERE `id` = '$id'");
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function delete_api_key($tag_id): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("DELETE FROM `api_keys` WHERE `id` = '$tag_id'");
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function get_all_coins(): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `coins`")->fetch_all(MYSQLI_ASSOC);
}

function get_balance_coin_this_user($id_coin)
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    $result = $mysql->query("SELECT * FROM `balances` WHERE `user_id` = '$user_id' AND `id_coin` = '$id_coin'")->fetch_array();
    if ($result) {
        return $result['quantity'];
    } else {
        return 0;
    }
}
function get_balances_positive_balances(): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    return $mysql->query("SELECT * FROM `balances` WHERE `user_id` = '$user_id'")->fetch_all(MYSQLI_ASSOC);
}

function get_total_balance(): int
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = get_balances_positive_balances();
    $total_balance = 0;
    foreach ($result as $balance) {
        $coin = $mysql->query("SELECT * FROM `coins` WHERE `id_coin` = '" . $balance['id_coin'] . "'")->fetch_assoc();
        $balance_usd = get_price_coin_to_usd($coin['full_name'], $balance['quantity']);
        $total_balance += (int)$balance_usd;
    }
    return $total_balance;
}
function get_balances_positive_balances_by_id($id): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `balances` WHERE `user_id` = '$id'")->fetch_all(MYSQLI_ASSOC);

}
function get_total_balance_by_id($id): int
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = get_balances_positive_balances_by_id($id);
    $total_balance = 0;
    foreach ($result as $balance) {
        $coin = $mysql->query("SELECT * FROM `coins` WHERE `id_coin` = '" . $balance['id_coin'] . "'")->fetch_assoc();
        $balance_usd = get_price_coin_to_usd($coin['full_name'], $balance['quantity']);
        $total_balance += (int)$balance_usd;
    }
    return $total_balance;

}
function get_coin_info($name_or_id_or_fname)
{
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `coins` WHERE `id_coin` = '$name_or_id_or_fname' OR `full_name` = '$name_or_id_or_fname' OR `simple_name` = '$name_or_id_or_fname'")->fetch_assoc();
}
function get_coin_name_by_id($id)
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("SELECT * FROM `coins` WHERE `id_coin` = '$id'")->fetch_assoc();
    return $result['full_name'];
}
function get_coin_id_by_name($name)
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("SELECT * FROM `coins` WHERE `full_name` = '$name' OR `simple_name` = '$name'")->fetch_assoc();
    return $result['id_coin'];
}
function check_existence_coin_field($id_coin): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    $result = $mysql->query("SELECT * FROM `balances` WHERE `user_id` = '$user_id' AND `id_coin` = '$id_coin'")->fetch_array();
    if ($result) {
        return true;
    } else {
        return false;
    }
}
function add_balance_user($id_coin, $quantity)
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    if (check_existence_coin_field($id_coin)) {
        $balance = get_balance_coin_this_user($id_coin);
        $new_balance = $balance + $quantity;
        $mysql->query("UPDATE `balances` SET `quantity` = '$new_balance' WHERE `user_id` = '$user_id' AND `id_coin` = '$id_coin'");
    } else {
        $mysql->query("INSERT INTO `balances`(`user_id`, `id_coin`, `quantity`) VALUES ('$user_id','$id_coin','$quantity')");
    }
}
function unbalance_user($id_coin, $quantity): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    if (check_existence_coin_field($id_coin)) {
        $balance = get_balance_coin_this_user($id_coin);
        $new_balance = $balance - $quantity;
        $mysql->query("UPDATE `balances` SET `quantity` = '$new_balance' WHERE `user_id` = '$user_id' AND `id_coin` = '$id_coin'");
        return true;
    } else {
        $mysql->query("INSERT INTO `balances`(`user_id`, `id_coin`, `quantity`) VALUES ('$user_id','$id_coin','-$quantity')");
        return false;
    }
}
function swap_balance_coin($coin1, $coin2, $amount): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    $balance_coin1 = get_balance_coin_this_user($coin1);
    $balance_coin2 = get_balance_coin_this_user($coin2);
    if ($balance_coin1 >= $amount) {
        $new_balance_coin1 = $balance_coin1 - $amount;
        $coin1_f_name = get_coin_name_by_id($coin1);
        $coin2_f_name = get_coin_name_by_id($coin2);
        $amount = convertCryptoPrice($amount, $coin1_f_name, $coin2_f_name);
        $new_balance_coin2 = $balance_coin2 + $amount;

        $mysql->query("UPDATE `balances` SET `quantity` = '$new_balance_coin1' WHERE `user_id` = '$user_id' AND `id_coin` = '$coin1'");
        if (check_existence_coin_field($coin2)) {
            $mysql->query("UPDATE `balances` SET `quantity` = '$new_balance_coin2' WHERE `user_id` = '$user_id' AND `id_coin` = '$coin2'");
        } else {
            $mysql->query("INSERT INTO `balances`(`user_id`, `id_coin`, `quantity`) VALUES ('$user_id','$coin2','$new_balance_coin2')");
        }

        return true;
    } else {
        return false;
    }
}

function get_p2p_user(): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `p2p_users` ")->fetch_all(MYSQLI_ASSOC);
}

function create_staking_order($coin_name, $summ_coin, $profit, $days): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    $id_coin = get_coin_id_by_name($coin_name);
    $date = date('Y-m-d H:i:s');
    if (unbalance_user($id_coin, $summ_coin)) {
        $result = $mysql->query("INSERT INTO `staking_orders`(`user_id`, `coin_name`, `summ_coin`, `profit`, `days`, `date`) VALUES ('$user_id','$coin_name','$summ_coin','$profit','$days','$date')");
        if ($result) {

            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function get_info_staking_order($id)
{
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `staking_orders` WHERE `id` = '$id'")->fetch_assoc();
}
function cancel_staking_order($id): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $info_order = get_info_staking_order($id);
    $summ_order = $info_order['summ_coin'];
    $coin_name = $info_order['coin_name'];
    $coin_id = get_coin_id_by_name($coin_name);
    $result = $mysql->query("DELETE FROM `staking_orders` WHERE `id` = '$id'");
    if ($result) {
        add_balance_user($coin_id, $summ_order);
        return true;
    } else {
        return false;
    }
}
function get_staking_history(): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    return $mysql->query("SELECT * FROM `staking_orders` WHERE `user_id` = '$user_id'")->fetch_all(MYSQLI_ASSOC);
}

function user_confirm_email($ref_code): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $auth_token = $_COOKIE['auth_token'];
    $info_user = get_user_info($auth_token);
    if ($info_user['email_verif'] == "1") {
        return false;
    } else {
        $result = $mysql->query("UPDATE `users` SET `email_verif` = '1' WHERE `ref_code` = '$ref_code'");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

function generate_code($type, $user_id){
    $mysql = new mysqli(servername, username, password, dbname);
    $code = mt_rand(100000, 999999);
    $date = date('Y-m-d H:i:s');
    $result = $mysql->query("INSERT INTO `codes`(`type_code`, `user_id`, `code`, `date`) VALUES ('$type','$user_id','$code', '$date')");
    if($result){
        return $code;
    }
    else{
        return false;
    }
}

function check_code($code, $type, $user_id): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("SELECT * FROM `codes` WHERE `code` = '$code' AND `type` = '$type' AND `user_id` = '$user_id'");
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function binding_user_by_email($email): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $auth_token = $_COOKIE['auth_token'];
    $primary_user = get_user_info($auth_token)['id'];
    $secondary_user = get_user_info_by_email_or_name($email)['id'];
    $date = date('Y-m-d H:i:s');
    $result = $mysql->query("INSERT INTO `bindings_users`(`user_id_worker`, `user_id_mamont`, `date`) VALUES ('$primary_user','$secondary_user', '$date')");
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function create_promocode($amount, $coin_name, $text, $promo): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    $coin_id = get_coin_info($coin_name)['id_coin'];
    $date = date('Y-m-d H:i:s');
    $result = $mysql->query("INSERT INTO `promo_codes`(`promo`, `user_id`, `coin_id`, `amount`, `text`, `date`) VALUES ('$promo','$user_id','$coin_id','$amount','$text', '$date')");
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function get_promocodes_user(): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    return $mysql->query("SELECT * FROM `promo_codes` WHERE `user_id` = '$user_id'")->fetch_all(MYSQLI_ASSOC);
}

function get_userList_this_user(): array{
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    return $mysql->query("SELECT * FROM `bindings_users` WHERE `user_id_worker` = '$user_id'")->fetch_all(MYSQLI_ASSOC);
}
function create_chat()
{
    $mysql = new mysqli(servername, username, password, dbname);
    $date = date('Y-m-d H:i:s');
    $token = $_COOKIE['auth_token'];
    $user = get_user_info($token);
    $user_id = $user['id'];
    $chat_id = mt_rand(100000, 999999);
    $result = $mysql->query("INSERT INTO `chats`(`chat_id`, `user_1`, `date`) VALUES ('$chat_id','$user_id','$date')");
    if($result){
        return $chat_id;
    }
    else{
        return false;
    }
}

function send_message($chat_id, $message) : bool
{
    $mysql = new mysqli(servername, username, password, dbname);

    // Проверка на успешное соединение с БД
    if ($mysql->connect_error) {
        die("Ошибка соединения с БД: " . $mysql->connect_error);
    }

    $user_id = get_user_info($_COOKIE['auth_token'])['id'];
    $date = date('Y-m-d H:i:s');

    $stmt = $mysql->prepare("INSERT INTO `messages` (`user_id`, `message_text`, `chat_id`, `date`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $message, $chat_id, $date);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}


function get_info_domain($domain) : array{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("SELECT * FROM `domains` WHERE `domain` = '$domain'");
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return array();
    }

}
function get_messages($chat_id): array
{
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `messages` WHERE `chat_id` = '$chat_id'")->fetch_all(MYSQLI_ASSOC);
}
function create_domain($domain, $user_id, $title, $zone_id, $ns, $stmp_server, $stmp_login, $stmp_password): bool
{
    $mysql = new mysqli(servername, username, password, dbname);

    if(empty(get_info_domain($domain))){
        $date = date('Y-m-d H:i:s');
        $ns = json_encode($ns);
        $result = $mysql->query("INSERT INTO `domains`( `domain`, `title`, `domain_ns`, `user_id`, `zone_id`,`stmp_host`,`stmp_email`, `stmp_password`, `date`) VALUES ('$domain','$title','$ns','$user_id','$zone_id','$stmp_server', '$stmp_login','$stmp_password','$date')");
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}
function delete_domain($zone_id): bool
{
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("DELETE FROM `domains` WHERE `zone_id` = '$zone_id'");
    if($result){
        return true;
    }
    else{
        return false;
    }
}
function get_chat()
{
    $mysql = new mysqli(servername, username, password, dbname);
    $user_id = get_user_info($_COOKIE['auth_token'])['id'];
    $result=  $mysql->query("SELECT * FROM `chats` WHERE `user_1` = '$user_id'")->fetch_assoc();
    if($result){
        return $result;
    }
    else{
         return create_chat();

    }
}
function get_chats() : array
{
    $mysql = new mysqli(servername, username, password, dbname);

    $query = "SELECT c.chat_id, c.user_1, c.date AS last_message_date
              FROM chats c
              JOIN (
                  SELECT chat_id, MAX(date) AS max_date
                  FROM messages
                  GROUP BY chat_id
              ) m ON c.chat_id = m.chat_id
              ORDER BY last_message_date DESC";

    return $mysql->query($query)->fetch_all(MYSQLI_ASSOC);
}

function get_info_chat($chat_id){
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `chats` WHERE `chat_id` = '$chat_id'")->fetch_assoc();
}
function get_count_messages_chat($chat_id){
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `messages` WHERE `chat_id` = '$chat_id'")->num_rows;
}
function create_order($open_price_order, $close_order_price, $amount, $coin_id, $type_order, $type_trade) {
    $mysql = new mysqli(servername, username, password, dbname);
    $date = date('Y-m-d H:i:s');
    $token = $_COOKIE['auth_token'];
    $user = get_user_info($token);
    $user_id = $user['id'];

    $result = $mysql->query("INSERT INTO `orders`(`user_id`, `type_order`,`type_trade`,  `date`, `coin_id`, `open_order_price`, `close_order_price`, `amount`, `status`) VALUES ('$user_id','$type_order','$type_trade','$date','$coin_id','$open_price_order','$close_order_price','$amount','open')");

    if ($result) {
        // Check if the insert query was successful
        $last_insert_id = $mysql->insert_id;
        return $last_insert_id;
    } else {
        // If there was an error, return false or handle it accordingly
        return false;
    }
}

function close_order($order_id){
    $mysql = new mysqli(servername, username, password, dbname);
    $date = date('Y-m-d H:i:s');
    $result = $mysql->query("UPDATE `orders` SET `status` = 'close', `date_close` = '$date' WHERE `id` = '$order_id'");
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function get_all_orders_limit(){
    $mysql = new mysqli(servername, username, password, dbname);


    return $mysql->query("SELECT * FROM `orders` WHERE `type_trade` = 'limit'")->fetch_all(MYSQLI_ASSOC);
}
function create_application_kyc($files){
    $mysql = new mysqli(servername, username, password, dbname);
    $date = date('Y-m-d H:i:s');
    $token = $_COOKIE['auth_token'];
    $user = get_user_info($token);
    $user_id = $user['id'];
    $result = $mysql->query("INSERT INTO `kyc_application`(`user_id`, `date`, `files`,`status`) VALUES ('$user_id','$date','$files','0')");
    if ($result){
        return true;
    }
    else{
        return false;
    }
}
function change_status_kyc($id, $status){
    $mysql = new mysqli(servername, username, password, dbname);
    $result = $mysql->query("UPDATE `kyc_applications` SET `status` = '$status' WHERE `id` = '$id'");
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function get_all_workers(){
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `users` WHERE `user_status` = 'worker'")->fetch_all(MYSQLI_ASSOC);
}
function get_domains_worker(){
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    return $mysql->query("SELECT * FROM `domains` WHERE `user_id` = '$user_id'")->fetch_assoc();
}

function get_info_promos(){
    $mysql = new mysqli(servername, username, password, dbname);

    return $mysql->query("SELECT * FROM `promo_codes`")->fetch_all(MYSQLI_ASSOC);
}
function get_info_promo($promo){
    $mysql = new mysqli(servername, username, password, dbname);
    return $mysql->query("SELECT * FROM `promo_codes` WHERE `promo` = '$promo'")->fetch_assoc();
}
function binding_user_by_promo($promo){
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $info_promo = get_info_promo($promo);
    $user_id_worker = $info_promo['user_id'];
    $user_id_mamont = $user['id'];
    $date = date('Y-m-d H:i:s');
    $result = $mysql->query("INSERT INTO `bindings_users`(`user_id_worker`, `user_id_mamont`,`type`, `date`) VALUES ('$user_id_worker','$user_id_mamont','promo','$date')");
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function get_history_order(){
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    return $mysql->query("SELECT * FROM `orders` WHERE `user_id` = '$user_id' AND `status` = 'close'")->fetch_all(MYSQLI_ASSOC);
}
function get_open_order(){
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    $user_id = $user['id'];
    return $mysql->query("SELECT * FROM `orders` WHERE `user_id` = '$user_id' AND `status` = 'open'")->fetch_all(MYSQLI_ASSOC);
}

function check_is_worker(){
    $mysql = new mysqli(servername, username, password, dbname);
    $user = get_user_info($_COOKIE['auth_token']);
    if($user['user_status'] == "worker"){
        return true;
    }
    else{
        return false;
    }
}

function binding_user_by_id($worker_id, $mamont_id){
    $mysql = new mysqli(servername, username, password, dbname);
    $date = date('Y-m-d H:i:s');
    $result = $mysql->query("INSERT INTO `bindings_users`(`user_id_worker`, `user_id_mamont`,`type`, `date`) VALUES ('$worker_id','$mamont_id','id','$date')");
    if($result){
        return true;
    }
    else{
        return false;
    }
}