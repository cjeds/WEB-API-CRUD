<?php
// Database connection
$conn = new mysqli("localhost:4306", "root", "", "crud_api");

// Check for database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to delete all records
$sql = "DELETE FROM users";

if ($conn->query($sql) === true) {
    echo "All records deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
