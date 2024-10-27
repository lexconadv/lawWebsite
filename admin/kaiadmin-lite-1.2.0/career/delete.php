<?php
include("../db.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Delete the file from the server
    $sql = "SELECT File FROM Career WHERE CareerID = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (file_exists($row['File'])) {
            unlink($row['File']);
        }
    }

    // Delete the record from the database
    $sql = "DELETE FROM Career WHERE CareerID = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully');</script>";
    } else {
        echo "<script>alert('Failed to delete record');</script>";
    }
}
echo "<script>window.open('career_view.php', '_self');</script>";
$conn->close();
?>
