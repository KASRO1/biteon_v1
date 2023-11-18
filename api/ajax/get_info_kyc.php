<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";
header("application/json");

$id = $_POST['id'];
echo json_encode(get_kyc_info($id));