<?php
include('db.php');  // Include the db.php file

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    parse_str(file_get_contents("php://input"), $put_data);
    $id = $put_data['id'];
    $name = $put_data['name'];
    $email = $put_data['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();  // Close the connection
?>
