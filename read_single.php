<?php
// Database connection
$conn = new mysqli("localhost:4306", "root", "", "crud_api");

// Check for database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' is provided in the query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to get a single user by ID
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    // Fetch and display the record
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"];
    } else {
        echo "No record found with ID: $id";
    }
} else {
    echo "ID parameter is missing";
}

// Close the database connection
$conn->close();
?>
