<?php
// Database connection
$host = 'localhost';
$dbname = 'lawfirmwebside'; // Replace with your database name
$user = 'root'; // Replace with your MySQL username
$pass = ''; // Replace with your MySQL password

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>