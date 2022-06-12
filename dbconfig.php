<?php
// Database configuration
$dbHost     = "sql11.freesqldatabase.com";
$dbUsername = "sql11499293";
$dbPassword = "ek5F7VuzE2";
$dbName     = "sql11499293";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>