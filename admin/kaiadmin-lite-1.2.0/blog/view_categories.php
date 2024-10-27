<?php
include '../db.php'; // MySQL connection

$query = "SELECT * FROM categories";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Categories</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Category List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['category_name']; ?></td>
                <td>
                    <a href="update_category.php?id=<?= $row['id']; ?>" class="btn btn-warning">Update</a>
                    <a href="delete_category.php?id=<?= $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="insert_category.php" class="btn btn-primary">Add New Category</a>
    <a href="../index.php" class="btn btn-primary">Back</a>
</div>
</body>
</html>
