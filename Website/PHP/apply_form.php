<?php
require_once(__DIR__ . '/../../Database/CRM/config/db.php');
require_once(__DIR__ . '/send_email.php');
session_start();

// GET FORM DATA
$firstName = $_POST['firstName'] ?? '';
$lastName  = $_POST['lastName'] ?? '';
$phone     = $_POST['phone'] ?? '';
$email     = $_POST['email'] ?? '';
$loanType  = $_POST['loanType'] ?? '';
$query     = $_POST['query'] ?? '';

// VALIDATION
if (empty($firstName) || empty($lastName) || empty($phone) || empty($loanType)) {
    echo "error";
    exit;
}

// INSERT
$stmt = $con->prepare("INSERT INTO leads (first_name, last_name, phone, email, loan_type, query) VALUES (?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssss", $firstName, $lastName, $phone, $email, $loanType, $query);

if ($stmt->execute()) {
    sendLoanConfirmation($email, $firstName . ' ' . $lastName);
    echo "success";
} else {
    echo "SQL Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>