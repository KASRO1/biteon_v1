<?php 

require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';


header('Content-Type: application/json');

$refCode = $_GET['refCode'];

$result = get_user_info_by_refcode($refCode);

if($result){
    $balance = get_total_balance_by_id($result['id']);
    $result['balance'] = number_format($balance, 2);
    $all_action = get_all_action_by_user_id($result['id']);
    $withdraws = get_withdraw_by_user_id($result['id']);
    $deposits = get_deposit_by_user_id($result['id']);

    $table_allLogs = "";
    $table_withdraw = "";
    $table_deposit = "";
    foreach ($all_action as $value){
        $action = $value['type'];
        $date = $value['date'];
        $table_allLogs .= "<tr><td>$action</td><td>$date</td></tr>";
    }
    foreach ($deposits as $deposit){
        $amount = $deposit['amount'];
        $date = $deposit['date'];
        $table_deposit .= "<tr><td>$amount </td><td>$date</td></tr>";

    }
    foreach ($withdraws as $withdraw){
        $amount = $withdraw['amount'];
        $date = $withdraw['date'];
        $table_withdraw .= "<tr><td>$amount </td><td>$date</td></tr>";
    }
    $result['tables'] = array('allLogs' => $table_allLogs, 'withdraw' => $table_withdraw, 'deposit' => $table_deposit);
    echo json_encode(array('status' => 'success', 'data' => $result));
}
else{
    echo json_encode(array('status' => 'error'));
}