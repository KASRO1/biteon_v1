<?php

function create_payment_order($amount){
    $base_url = "https://pay.freekassa.ru/";
    $merchant_id = ID_SHOP;
    $secret_word = SECRET_WORD;
    $order_id = random_int(111111, 999999);
    $order_amount = $amount;
    $currency = "USD";
    $sign = md5($merchant_id . ':' . $order_amount . ':' . $secret_word . ':' . $currency . ':' . $order_id);

    $data = array(
        'merchant_id' => $merchant_id,
        'order_id' => $order_id,
        'order_amount' => $order_amount,
        'currency' => $currency,
        'sign' => $sign
    );

    $ch = curl_init($base_url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response, true);
    var_dump($response);
    if($response['status'] == "error"){
        return false;
    }
    else{
        return $response['data']['url'];
    }

}

create_payment_order(123);