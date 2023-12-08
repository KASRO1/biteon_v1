<?php


require $_SERVER['DOCUMENT_ROOT']. "/vendor/autoload.php";
require($_SERVER['DOCUMENT_ROOT'].'/api/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/api/function/backend/database.php');
global $domain_titleINIT;
$domain_titleINIT = get_domain_title();
require($_SERVER['DOCUMENT_ROOT'].'/api/function/backend/course.php');
require($_SERVER['DOCUMENT_ROOT'].'/api/function/backend/mailer.php');
require($_SERVER['DOCUMENT_ROOT'].'/api/function/frontend/index.php');
require($_SERVER['DOCUMENT_ROOT'].'/api/function/backend/cloudflare.php');
require($_SERVER['DOCUMENT_ROOT'].'/api/function/backend/telegram.php');
require($_SERVER['DOCUMENT_ROOT'].'/api/function/backend/payment_api.php');