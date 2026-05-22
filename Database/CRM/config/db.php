<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "loan_experts";

$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>