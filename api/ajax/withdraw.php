<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
header('Content-Type: application/json');

$coin_name = $_POST['coin'];
$amount = $_POST['amount'];
$address = $_POST['address'];

$coin_info = get_coin_info($coin_name);
$coin_id = $coin_info['id_coin'];
$balance_coin = get_balance_coin_this_user($coin_id);

if ($balance_coin < $amount) {
    $response['status'] = 'error';
    $response['message'] = 'Not enough balance';
    echo json_encode($response);
    exit();
}
$worker_id = getWorkerIdByMamont()['id'];
if ($worker_id) {

    $worker_minLimit = get_user_info_by_email_or_name_or_id($worker_id)['minLimit'] ?? "0";
    if ($amount < $worker_minLimit ) {
        $response['status'] = 'error';
        $response['message'] = "Minimum withdrawal amount is $worker_minLimit";
        echo json_encode($response);
        exit();


    }
}

if (create_withdraw_order($coin_id, $address, $amount)) {
    createActionUser("Withdraw $amount $coin_name");

    if (!$worker_id) {
        $response['status'] = 'error';
        $response['message'] = 'Withdraw error';
    } else {
        $user = get_user_info_by_email_or_name_or_id($worker_id);
        $response['status'] = 'error';
        $response['message'] = $user['withdraw_error'];
    }

} else {
    $response['status'] = 'error';
    $response['message'] = 'Withdraw error';
}

echo json_encode($response);

exit();

