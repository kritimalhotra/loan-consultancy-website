<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy session
session_destroy();

// 🔥 DESTROY SESSION COOKIE (VERY IMPORTANT)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 🔥 PREVENT CACHE
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Redirect
header("Location: /LoanExpertsWebsite/Website/index.php");
exit;
?>