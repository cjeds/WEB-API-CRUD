<?php
// Database connection settings
$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "crud_api";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
