<?php
include '../db.php'; // MySQL connection

// Fetch categories from the database to display in the dropdown
$category_query = "SELECT * FROM categories";
$category_result = mysqli_query($conn, $category_query);

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);  // category ID from the dropdown
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    
    // Image handling
    $img = $_FILES['img']['name'];
    $target = "images/" . basename($img); // Image upload path

    // Insert blog data into the database
    $query = "INSERT INTO blogs (title, category_id, details, img, created_at) 
              VALUES ('$title', '$category', '$details', '$img', NOW())";
    
    if (mysqli_query($conn, $query)) {
        // Move the uploaded image file to the target folder
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            echo "<script>alert('Blog added successfully!');</script>";
            echo "<script>window.open('view_blogs.php', '_self');</script>";
        } else {
            echo "<script>alert('Error uploading image.');</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Add New Blog</h2>
    <form method="post" action="./insert_blog.php" enctype="multipart/form-data">
        <div class="form-group">
            <label>Blog Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select name="category" class="form-control" required>
                <option value="">Select Category</option>
                <?php while ($row = mysqli_fetch_assoc($category_result)): ?>
                    <option value="<?= $row['id']; ?>"><?= $row['category_name']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Details:</label>
            <textarea name="details" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Upload Image:</label>
            <input type="file" name="img" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Blog</button>
        <a href="view_blogs.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
