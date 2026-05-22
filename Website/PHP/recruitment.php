<?php
require_once(__DIR__ . '/../../Database/CRM/config/db.php');
$fullName = $_POST['fullName'] ?? '';
$email    = $_POST['email'] ?? '';
$phone    = $_POST['phone'] ?? '';

if(empty($fullName) || empty($email)){
    echo "Please fill required fields";
    exit;
}

if(isset($_FILES['resume'])){

    $fileName = $_FILES['resume']['name'];
    $fileTmp  = $_FILES['resume']['tmp_name'];
    $fileSize = $_FILES['resume']['size'];

    $allowed = ['pdf','jpg','jpeg','png'];
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if(!in_array($ext, $allowed)){
        echo "Invalid file type";
        exit;
    }

    if($fileSize > 2 * 1024 * 1024){
        echo "File too large (max 2MB)";
        exit;
    }

    // ✅ FIXED PATH
    $uploadDir = dirname(__DIR__, 2) . "/Database/resumes/";

    // ✅ AUTO CREATE FOLDER
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $newName = time() . "_" . basename($fileName);
    $filePath = $uploadDir . $newName;

    // ✅ path to save in DB
    $dbPath = "resumes/" . $newName;

    if(move_uploaded_file($fileTmp, $filePath)){

        $stmt = $con->prepare("
          INSERT INTO recruitment (full_name, email, phone, resume)
          VALUES (?, ?, ?, ?)
        ");

        $stmt->bind_param("ssss", $fullName, $email, $phone, $dbPath);

        if($stmt->execute()){
            echo "success|" . $newName;
        } else {
            echo "DB Error: " . $stmt->error;
        }

        $stmt->close();

    } else {
        echo "Upload failed";
    }

} else {
    echo "No file uploaded";
}

$con->close();

?>