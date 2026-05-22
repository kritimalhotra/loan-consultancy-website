<?php
require_once(__DIR__ . '/../../Database/CRM/config/db.php');
// Get data
$fullName = $_POST['fullName'] ?? '';
$email    = $_POST['email'] ?? '';
$phone    = $_POST['phone'] ?? '';
$query    = $_POST['query'] ?? '';

// Validation
if(empty($fullName) || empty($email) || empty($phone) || empty($query)){
    echo "Please fill all required fields";
    exit;
}

// Insert into DB
$stmt = $con->prepare("
    INSERT INTO enquiry (full_name, email, phone, query)
    VALUES (?, ?, ?, ?)
");

$stmt->bind_param("ssss", $fullName, $email, $phone, $query);

if($stmt->execute()){
    echo "success";
} else {
    echo "DB Error: " . $stmt->error;
}

$stmt->close();
$con->close();

?>