<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 🔥 CORRECT PATH (VERY IMPORTANT)
require_once(__DIR__ . '/Database/CRM/config/db.php');

$sql = "
CREATE TABLE IF NOT EXISTS user_activity (
    user_id INT NOT NULL,
    table_name VARCHAR(50) NOT NULL,
    last_seen_id INT DEFAULT 0,
    PRIMARY KEY (user_id, table_name)
);
";

if ($con->query($sql)) {
    echo "✅ user_activity table created!";
} else {
    echo "❌ ERROR: " . $con->error;
}
?>