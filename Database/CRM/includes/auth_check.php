<?php
session_start();

/* CHECK LOGIN */
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../admin/loginUI.php");
    exit;
}

/* OPTIONAL: SESSION SECURITY */
if (!isset($_SESSION['user_id'])) {
    session_destroy();
    header("Location: ../admin/loginUI.php");
    exit;
}