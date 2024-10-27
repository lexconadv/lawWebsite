<?php
include("./db.php");

// Check if the service ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the current service data
    $sql = "SELECT * FROM service WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $service = $result->fetch_assoc();
    } else {
        echo "Service not found.";
        exit;
    }
}

// Handle form submission to update the service
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);

    // Check if a new image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . time() . "_" . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate the image
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $sql = "UPDATE service SET title = '$title', description = '$description', image = '$target_file' WHERE id = $id";
        }
    } else {
        $sql = "UPDATE service SET title = '$title', description = '$description' WHERE id = $id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Service updated successfully!');</script>";
        echo "<script>window.open('./viewsirvice.php', '_self');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Service</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Update Service</h2>
        <form action="updateservice.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data"
            class="p-4 border rounded">
            <div class="mb-3">
                <label for="title" class="form-label">Service Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $service['title']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"
                    rows="4"><?php echo $service['description']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload New Image (optional)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Update Service</button>
        </form>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>