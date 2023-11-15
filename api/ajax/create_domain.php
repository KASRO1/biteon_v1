<?php
require $_SERVER['DOCUMENT_ROOT'] . "/api/init.php";
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: application/json');
$domain = $_POST['domain'];
$title = $_POST['domainName'];
$user_id = $_POST['worker_id'];
$stmp_host = $_POST['stmp_host'];
$stmp_login = $_POST['stmp_login'];
$stmp_password = $_POST['stmp_password'];

if (add_domain_cloudflare($domain, $title, $user_id, $stmp_host, $stmp_login, $stmp_password)) {
    $info_domain = get_info_domain($domain);
    echo json_encode(array("success" => true, "info_domain" => $info_domain));
} else {
    echo json_encode(array("success" => false));
}


