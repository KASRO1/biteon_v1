<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$uploadDir = $_SERVER['DOCUMENT_ROOT'].'/assets/kyc_documents/';
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

$response = array('message' => '', 'success' => false);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['kyc_images'])) {
        $fileCount = count($_FILES['kyc_images']['name']);

        for ($i = 0; $i < $fileCount; $i++) {
            $file = $_FILES['kyc_images'];
            $fileExtension = strtolower(pathinfo($file['name'][$i], PATHINFO_EXTENSION));

            $randomFileName = uniqid() . '.' . $fileExtension;
            $uploadPath = $uploadDir . $randomFileName;

            if (in_array($fileExtension, $allowedExtensions)) {
                if (move_uploaded_file($file['tmp_name'][$i], $uploadPath)) {
                    $uploadPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $uploadPath);
                    $file_path_bd = ['image_url' => $uploadPath];
                    $file_path_bd = json_encode($file_path_bd);

                    if (create_application_kyc($file_path_bd)) {
                        $response['status'] = "success";
                    } else {
                        $response['status'] = "error";
                    }
                    var_dump($uploadPath);
                } else {
                    $response['status'] = "error";
                }
            } else {
                $response['status'] = "error_file_inadmissible";
            }
        }
    } else {
        $response['status'] = 'error_file_not_upload';
    }
} else {
    $response['status'] = 'error';
}

header('Content-Type: application/json');
echo json_encode($response);
?>
