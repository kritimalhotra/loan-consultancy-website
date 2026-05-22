<?php
require_once(__DIR__ . '/../../Database/CRM/config/db.php');
require_once(__DIR__ . '/send_email.php');

$first_name = $_POST['firstName'] ?? '';
$last_name  = $_POST['lastName'] ?? '';
$phone      = $_POST['phone'] ?? '';
$email      = $_POST['email'] ?? '';

$call_date  = $_POST['appointment_date'] ?? '';
$call_time  = $_POST['appointment_time'] ?? '';

if($first_name && $phone && $call_date && $call_time){

    $stmt = $con->prepare("INSERT INTO consultations 
    (first_name, last_name, phone, email, call_date, call_time) 
    VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", 
        $first_name, 
        $last_name, 
        $phone, 
        $email, 
        $call_date, 
        $call_time
    );

    if($stmt->execute()){
        sendConsultationConfirmation($email, $first_name . ' ' . $last_name);
        echo "success";
    } else {
        echo "error";
    }

} else {
    echo "missing fields";
}
?>