<?php
session_start();

require_once(__DIR__ . '/../config/db.php');

/* ONLY POST ALLOWED */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin/loginUI.php');
    exit;
}

/* HELPER */
function redirectError($msg) {
    header('Location: ../admin/loginUI.php?error=' . urlencode($msg));
    exit;
}

/* INPUT */
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    redirectError('Email and password are required');
}

$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($email === false) {
    redirectError('Invalid email address');
}

/* BRUTE FORCE PROTECTION */
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

if ($_SESSION['login_attempts'] >= 5) {
    redirectError('Too many attempts. Try again later.');
}

/* DB SETTINGS */
$con->set_charset("utf8mb4");

/* PREPARE QUERY */
$stmt = $con->prepare('SELECT id, password_hash, status, role FROM users WHERE email = ? LIMIT 1');

if (!$stmt) {
    redirectError('Server error. Try later.');
}

$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result(); 

/* CHECK USER */
if ($stmt->num_rows !== 1) {
    $_SESSION['login_attempts']++;
    redirectError('Invalid credentials');
}

/* FETCH DATA */
$stmt->bind_result($userId, $passwordHash, $status, $role);
$stmt->fetch();

$stmt->close();
$con->close();

/* VERIFY PASSWORD + STATUS */
if ($status !== 'active' || !password_verify($password, $passwordHash)) {
    $_SESSION['login_attempts']++;
    redirectError('Invalid credentials');
}

/* SUCCESS LOGIN */
session_regenerate_id(true);
$_SESSION['login_attempts'] = 0;

$_SESSION['user_id'] = $userId;
$_SESSION['user_email'] = $email;
$_SESSION['role'] = $role;   // 🔥 IMPORTANT
$_SESSION['logged_in'] = true;

/* REDIRECT */
header('Location: ../admin/dashboard.php');
exit;