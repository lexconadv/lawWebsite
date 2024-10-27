<?php
include '../db.php'; // MySQL connection

$id = $_GET['id'];
$query = "DELETE FROM categories WHERE id=$id";
if (mysqli_query($conn, $query)) {
    header('Location: view_categories.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
