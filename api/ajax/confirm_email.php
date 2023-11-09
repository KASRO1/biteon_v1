<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';


if (user_confirm_email()) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Email confirmed successfully'
    ]);
    header('Location: /wallet?email_confirmed=1');
} else {

    header('Location: /wallet?email_confirmed=0');
    echo json_encode([
        'status' => 'error',
        'message' => 'Failed to acknowledge the email. Mail may have already been confirmed'
    ]);
}
