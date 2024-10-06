<?php
include("./db.php");

// Check if the service ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the service
    $sql = "DELETE FROM service WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Service deleted successfully!');</script>";
        echo "<script>window.open('./viewservice.php', '_self');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>