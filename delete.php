<?php
include_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    // Decode the incoming JSON request body
    $delete_data = json_decode(file_get_contents("php://input"), true);
    
    // Ensure the 'id' is set in the decoded data
    if (isset($delete_data['id'])) {
        $id = $delete_data['id'];

        // Perform the DELETE query
        $sql = "DELETE FROM users WHERE id=$id";

        if ($conn->query($sql) === true) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "ID is missing from the request data.";
    }
}

$conn->close();
?>
