<?php
require $_SERVER['DOCUMENT_ROOT'] . "/api/init.php";
header('Content-Type: application/json');
$domain = $_POST['domain'];
if (delete_domain_cloudflare($domain)) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error"));
}