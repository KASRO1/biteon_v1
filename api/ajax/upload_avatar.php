<?php
require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';

$uploadDir = $_SERVER['DOCUMENT_ROOT'].'/assets/users_avatars/';
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

$response = array('message' => '', 'success' => false);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['avatar'])) {
        $file = $_FILES['avatar'];
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        
   
        $randomFileName = uniqid() . '.' . $fileExtension;
        $uploadPath = $uploadDir . $randomFileName;

        if (in_array($fileExtension, $allowedExtensions)) {
            if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
                $uploadPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $uploadPath);
                $file_path_bd = ['image_url' => $uploadPath];
                $file_path_bd = json_encode($file_path_bd);
                if(change_avatar(false, $file_path_bd)){
                    $response['status'] = "success";
                    createActionUser("Upload avatar");
                }
                else{
                    $response['status'] = "error";
                }
                
            } else {
                $response['status'] = "error";
            }
        } else {
            $response['status'] = "error_file_inadmissible";
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
