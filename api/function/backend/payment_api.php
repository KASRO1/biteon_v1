<?php


function createPayment($order_id, $amount, $customer_id) {
    $api_key = PayPort_API_KEY;
    $url = "https://sandbox.payment2page.com/api/v5/invoice/get";

    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key,
    ];

    $return_url = MainDomain;
    $order_desc = "Оплата заказа №$order_id";
    $response_url = MainDomain;
    $cancel_url = MainDomain;
    $server_url = MainDomain . "/api/ajax/update_statusPayment";
    $data = [
        'order_id' => "$order_id",
        'amount' => $amount,
        'customer_id' => $customer_id,
        'locale' => 'en', // Замените на вашу локализацию
        'currency' => 'USD', // Замените на вашу валюту
        'return_url' => $return_url,
        'order_desc' => $order_desc,
        'response_url' => $response_url,
        'cancel_url' => $cancel_url,
        'server_url' => $server_url,
    ];

    $options = [
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
    ];

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    curl_close($ch);
    $json_data = json_decode($response, true);

    if (!isset($json_data['error'])){

        createPaymentOrder($order_id, $json_data['invoice_id'], $amount, "P2P");
    }

    return json_decode($response, true);
}
function getAdIdPayment($amount)
{
    $url = 'https://sandbox.payment2page.com/api/v3/payment/request';

    $headers = array(
        'Authorization: Bearer ' . PayPort_API_KEY,
        'Content-Type: application/json',
    );

    $data = array(
        'amount' => $amount,
        'currency' => "USD",

    );

    $options = array(
        'http' => array(
            'header' => implode("\r\n", $headers),
            'method' => 'POST',
            'content' => json_encode($data),
        ),
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        die('Error sending request');
    }

    return json_decode($result, true);
}

function getDataPayment($id){
    $url = 'https://sandbox.payment2page.com/api/v3/payment/check/approved';

    $headers = array(
        'Authorization: Bearer ' . PayPort_API_KEY,
        'Content-Type: application/json',
    );

    $data = array(
        'invoice_id' => $id,

    );

    $options = array(
        'http' => array(
            'header' => implode("\r\n", $headers),
            'method' => 'POST',
            'content' => json_encode($data),
        ),
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        die('Error sending request');
    }

    return json_decode($result, true);
}

function updateStatusPayment(){

}
