<?php
include("./db.php");

// Fetch services from the database
$sql = "SELECT * FROM service";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Services</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Back Button -->
        <a href="index.php" class="btn btn-secondary mb-3">Back</a>

        <h2 class="text-center">Services</h2>

        <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                        <?php if (!empty($row['image'])): ?>
                        <img src="<?php echo $row['image']; ?>" alt="Service Image" style="width: 100px; height: auto;">
                        <?php else: ?>
                        No Image
                        <?php endif; ?>
                    </td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td>
                        <!-- Update Button -->
                        <a href="updateservice.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a>

                        <!-- Delete Button -->
                        <a href="deleteservice.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this service?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No services found.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Close the connection
$conn->close();
?>