<?php
include '../db.php'; // MySQL connection

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $query = "INSERT INTO categories (category_name) VALUES ('$category_name')";
    
    if (mysqli_query($conn, $query)) {
        // Success alert and redirection
        echo "<script>alert('Category added successfully!');</script>";
        echo "<script>window.open('./view_categories.php', '_self');</script>";
    } else {
        // Error alert with proper concatenation of error message
        $error_message = mysqli_error($conn);
        echo "<script>alert('Error: $error_message');</script>";
        echo "<script>window.open('./view_categories.php', '_self');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Add New Category</h2>
    <form method="post" action="insert_category.php"  enctype="multipart/form-data">
        <div class="form-group">
            <label>Category Name:</label>
            <input type="text" name="category_name" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
        <a href="../index.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
