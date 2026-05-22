<?php
require_once(__DIR__ . '/../../Database/CRM/config/db.php');
require_once(__DIR__ . '/send_email.php');
// CHECK CONNECTION
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

// GET FORM DATA
$firstName = $_POST['firstName'] ?? '';
$lastName  = $_POST['lastName'] ?? '';
$phone     = $_POST['phone'] ?? '';
$email     = $_POST['email'] ?? '';
$date      = $_POST['appointment_date'] ?? '';
$time      = $_POST['appointment_time'] ?? '';

// VALIDATION
if (empty($firstName) || empty($lastName) || empty($phone) || empty($date) || empty($time)) {
    echo "Please fill all required fields.";
    exit;
}

// INSERT INTO appointments table ✅
$stmt = $con->prepare("
  INSERT INTO appointments 
  (first_name, last_name, phone, email, appointment_date, appointment_time) 
  VALUES (?, ?, ?, ?, ?, ?)
");

$stmt->bind_param("ssssss", $firstName, $lastName, $phone, $email, $date, $time);
$selectedDate = $_POST['appointment_date'] ?? '';
$selectedTime = $_POST['appointment_time'] ?? '';

$today = date('Y-m-d');
$currentTime = date('H:i');

if ($selectedDate < $today) {
    echo "Invalid date selected";
    exit;
}

if ($selectedDate === $today && $selectedTime < $currentTime) {
    echo "Invalid time selected";
    exit;
}

// EXECUTE
if ($stmt->execute()) {
    sendAppointmentConfirmation($email, $firstName . ' ' . $lastName);
    echo "success";
} else {
    echo "Error: " . $stmt->error;
}

// CLOSE
$stmt->close();
$con->close();

?>