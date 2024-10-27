<?php
include '../db.php'; // MySQL connection

// Fetch all blogs with their categories
$query = "SELECT blogs.*, categories.category_name FROM blogs 
          JOIN categories ON blogs.category_id = categories.id 
          ORDER BY blogs.created_at DESC";

$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Error with the query: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Blogs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Blog List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Details</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Check if there are any blogs returned
            if (mysqli_num_rows($result) > 0):
                while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><?= $row['category_name']; ?></td>
                        <td><?= $row['details']; ?></td>
                        <td><img src="images/<?= $row['img']; ?>" width="100"></td>
                        <td><?= $row['created_at']; ?></td>
                        <td>
                            <a href="update_blog.php?id=<?= $row['id']; ?>" class="btn btn-warning">Update</a>
                            <a href="delete_blog.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile;
            else: ?>
                <tr>
                    <td colspan="7">No blogs found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="insert_blog.php" class="btn btn-primary">Add New Blog</a>
    <a href="insert_blog.php" class="btn btn-primary">Back</a>
</div>
</body>
</html>
