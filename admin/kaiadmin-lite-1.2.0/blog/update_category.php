<?php
include '../db.php'; // MySQL connection

$id = $_GET['id'];
$query = "SELECT * FROM categories WHERE id=$id";
$result = mysqli_query($conn, $query);
$category = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $query = "UPDATE categories SET category_name='$category_name' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header('Location: view_categories.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Update Category</h2>
    <form method="post">
        <div class="form-group">
            <label>Category Name:</label>
            <input type="text" name="category_name" class="form-control" value="<?= $category['category_name']; ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update Category</button>
        <a href="view_categories.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
