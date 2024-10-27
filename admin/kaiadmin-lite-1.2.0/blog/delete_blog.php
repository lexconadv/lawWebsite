<?php
include '../db.php'; // MySQL connection

$id = $_GET['id'];

// Delete the blog from the database
$query = "DELETE FROM blogs WHERE id=$id";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Blog deleted successfully!');</script>";
    echo "<script>window.open('view_blogs.php', '_self');</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
}
?>