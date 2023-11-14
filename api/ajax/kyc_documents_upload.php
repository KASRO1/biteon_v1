<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';

$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/kyc_documents/';
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

$response = array('message' => '', 'success' => false);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['kyc_images'])) {
        $fileCount = count($_FILES['kyc_images']['name']);
        $files = array("kyc_images" => array());
        for ($i = 0; $i < $fileCount; $i++) {
            $file = $_FILES['kyc_images'];
            $fileExtension = strtolower(pathinfo($file['name'][$i], PATHINFO_EXTENSION));

            $randomFileName = uniqid() . '.' . $fileExtension;
            $uploadPath = $uploadDir . $randomFileName;


            if (move_uploaded_file($file['tmp_name'][$i], $uploadPath)) {
                $uploadPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $uploadPath);

                $files['kyc_images'][] = $uploadPath;


            } else {
                $response['status'] = "error";
            }

        }
        if (create_application_kyc(json_encode($files))) {
            $response['success'] = true;
            $response['status'] = "success";
        } else {
            $response['status'] = "error";
        }
    } else {
        $response['status'] = 'error_file_not_upload';
    }
} else {
    $response['status'] = 'error';
}

header('Content-Type: application/json');
echo json_encode($response);

