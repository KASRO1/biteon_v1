<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$open_orders = render_history_order("open_orders");
$close_order = render_history_order("close_orders");

echo $open_orders.$close_order;