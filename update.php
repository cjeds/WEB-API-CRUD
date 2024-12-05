<?php
include_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    // Get the raw POST data
    $put_data = json_decode(file_get_contents("php://input"), true);

    // Check if the required fields are available
    if (isset($put_data['id']) && isset($put_data['name']) && isset($put_data['email'])) {
        $id = $put_data['id'];
        $name = $put_data['name'];
        $email = $put_data['email'];

        // SQL query to update the user record
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

        if ($conn->query($sql) === true) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Missing parameters";
    }
}

$conn->close();
?>
