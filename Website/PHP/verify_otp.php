<?php
session_start();

// Include database connection
require_once(__DIR__ . '/../../Database/CRM/config/db.php');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Method not allowed";
    exit;
}

// Get POST data
$otp = trim($_POST['otp'] ?? '');

// Check if session data exists
if (!isset($_SESSION['signup_data'])) {
    echo "Session expired";
    $con->close();
    exit;
}

$signupData = $_SESSION['signup_data'];

// Validate OTP
if ($otp !== (string)$signupData['otp']) {
    echo "Invalid OTP";
    $con->close();
    exit;
}

// Insert user into database
$stmt = $con->prepare("INSERT INTO client_users (full_name, email, password) VALUES (?, ?, ?)");
if (!$stmt) {
    echo "Database error";
    $con->close();
    exit;
}
$stmt->bind_param("sss", $signupData['fullName'], $signupData['email'], $signupData['password']);

if ($stmt->execute()) {
    // Clear session
    unset($_SESSION['signup_data']);
    echo "success";
} else {
    echo "Database error";
}

$stmt->close();
$con->close();
?>