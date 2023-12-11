<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$open_orders = render_history_order("open_orders");
$close_order = render_history_order("close_orders");

echo $open_orders.$close_order;