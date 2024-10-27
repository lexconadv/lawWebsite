<?php
include("./db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL to delete the lawyer
    $sql = "DELETE FROM lawyer WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Lawyer deleted successfully');</script>";
        echo "<script>window.open('./viewlawyer.php', '_self');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>