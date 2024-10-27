<?php
include '../db.php'; // MySQL connection

// Check if 'id' is set in the URL
if (!isset($_GET['id'])) {
    echo "<script>alert('Error: Blog ID is missing.');</script>";
    echo "<script>window.open('view_blogs.php', '_self');</script>";
    exit; // Stop script execution
}

$id = $_GET['id'];

// Fetch the blog details
$query = "SELECT * FROM blogs WHERE id=?";
$stmt = mysqli_prepare($conn, $query);
if (!$stmt) {
    echo "<script>alert('Error preparing statement: " . mysqli_error($conn) . "');</script>";
    exit;
}

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$blog = mysqli_fetch_assoc($result);

// If blog not found, handle error
if (!$blog) {
    echo "<script>alert('Error: Blog not found.');</script>";
    echo "<script>window.open('view_blogs.php', '_self');</script>";
    exit;
}

// Fetch categories for the dropdown
$category_query = "SELECT * FROM categories";
$category_result = mysqli_query($conn, $category_query);

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $details = $_POST['details'];
    $img = $_FILES['img']['name'];
    $target = "images/" . basename($img);

    if ($img != '') {
        // If a new image is being uploaded
        move_uploaded_file($_FILES['img']['tmp_name'], $target);
        $query = "UPDATE blogs SET title=?, category_id=?, details=?, img=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $query);
        if (!$stmt) {
            echo "<script>alert('Error preparing update statement: " . mysqli_error($conn) . "');</script>";
            exit;
        }
        mysqli_stmt_bind_param($stmt, "ssssi", $title, $category, $details, $img, $id);
    } else {
        // If image is not being updated
        $query = "UPDATE blogs SET title=?, category_id=?, details=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $query);
        if (!$stmt) {
            echo "<script>alert('Error preparing update statement: " . mysqli_error($conn) . "');</script>";
            exit;
        }
        mysqli_stmt_bind_param($stmt, "sssi", $title, $category, $details, $id);
    }

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Blog updated successfully!');</script>";
        echo "<script>window.open('view_blogs.php', '_self');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Update Blog</h2>
    <form method="post" action="./update_blog.php?id=<?= htmlspecialchars($id); ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>Blog Title:</label>
            <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($blog['title']); ?>" required>
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select name="category" class="form-control" required>
                <?php while ($row = mysqli_fetch_assoc($category_result)): ?>
                    <option value="<?= $row['id']; ?>" <?= $row['id'] == $blog['category_id'] ? 'selected' : ''; ?>>
                        <?= htmlspecialchars($row['category_name']); ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Details:</label>
            <textarea name="details" class="form-control" required><?= htmlspecialchars($blog['details']); ?></textarea>
        </div>
        <div class="form-group">
            <label>Update Image:</label>
            <input type="file" name="img" class="form-control">
            <img src="images/<?= htmlspecialchars($blog['img']); ?>" width="100" alt="Current Image">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update Blog</button>
        <a href="view_blogs.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
