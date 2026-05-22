<?php
session_start();

// Include database connection
require_once(__DIR__ . '/../../Database/CRM/config/db.php');
if (isset($_SESSION['signup_data'])) {
    // allow resend BUT regenerate OTP
    unset($_SESSION['signup_data']);
}
// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Method not allowed";
    exit;
}

// Get POST data
$fullName = trim($_POST['fullName'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

// Validate fields are not empty
if (empty($fullName) || empty($email) || empty($password)) {
    echo "Please fill all fields";
    $con->close();
    exit;
}

// Check if email already exists
$stmt = $con->prepare("SELECT id FROM client_users WHERE email = ?");
if (!$stmt) {
    echo "Database error";
    $con->close();
    exit;
}
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "Email already registered";
    $stmt->close();
    $con->close();
    exit;
}
$stmt->close();

// Generate 6-digit OTP
$otp = random_int(100000, 999999);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
}
// Store user data in session temporarily
$_SESSION['signup_data'] = [
    'fullName' => $fullName,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'otp' => (string)$otp
];

// Send OTP email
$subject = "Loan Experts - Email Verification";
$message = "Your verification code is: $otp\n\nPlease enter this code to complete your registration.";
$headers = "From: support@loanexperts.com";

// Include PHPMailer
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require __DIR__ . '/PHPMailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'kritimalhotra10c@gmail.com'; // 🔴 change
    $mail->Password   = 'zbnuzgxbwzoznuxn';   // 🔴 change
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Email settings
    $mail->setFrom('kritimalhotra10c@gmail.com', 'Loan Experts');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Loan Experts - Email Verification';
    $mail->Body    = "<h2>Your OTP is: <b>$otp</b></h2><p>Do not share this code.</p>";

    $mail->send();

    echo "otp_sent";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
$con->close();
?>