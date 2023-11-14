<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$ref_code = $_GET['ref_code'];
if (user_confirm_email($ref_code)) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Email confirmed successfully'
    ]);
    header('Location: /login?email_confirmed=1');
} else {

    header('Location: /login?email_confirmed=0');
    echo json_encode([
        'status' => 'error',
        'message' => 'Failed to acknowledge the email. Mail may have already been confirmed'
    ]);
}
