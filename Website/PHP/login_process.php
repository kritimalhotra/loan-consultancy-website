<?php
session_start();
require_once(__DIR__ . '/../../Database/CRM/config/db.php');

// 🔥 ONLY ALLOW POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit("Invalid access");
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    echo "Please fill all fields";
    exit;
}

$stmt = $con->prepare("SELECT id, full_name, password FROM client_users WHERE email = ?");
if (!$stmt) {
    echo "Database error";
    exit;
}

$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    echo "Invalid email or password";
    exit;
}

$stmt->bind_result($userId, $userName, $hashedPassword);
$stmt->fetch();

// ✅ VERIFY PASSWORD
if (password_verify($password, $hashedPassword)) {

    $_SESSION['user_id'] = $userId;
    $_SESSION['user_name'] = $userName;

    session_regenerate_id(true); // 🔒 security

    echo "success"; // for AJAX
    exit;

} else {
    echo "Invalid email or password";
    exit;
}