<?php


function createPayment($ad_id, $amount, $customer_id)
{
    $url = 'https://sandbox.payment2page.com/api/v3/payment/create';

    $headers = array(
        'Authorization: Bearer ' . PayPort_API_KEY,
        'Content-Type: application/json',
    );
    $http_host = $_SERVER['HTTP_HOST'];
    $invoice_url = "http://".$http_host."/invoce_url";
    $success_url = "http://".$http_host."/success_url";
    $cancel_url = "http://".$http_host."/cancel_url";
    $data = array(
        'ad_id' => $ad_id,
        'amount' => $amount,
        'currency' => "USD",
        'client_expense' => 0,
        'customer_id' => $customer_id,
        'invoice_url' => $invoice_url,
        'success_url' => $success_url,
        'cancel_url' => $cancel_url,
        'payment_attributes' => null,
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


