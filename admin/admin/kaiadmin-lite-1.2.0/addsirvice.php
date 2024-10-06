<?php
include("./db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);

    // Image upload handling
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Set upload directory
        $target_dir = "uploads/";
        // Set file name with time-based unique identifier
        $target_file = $target_dir . time() . "_" . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // Check if file already exists
            if (!file_exists($target_file)) {
                // Check file size (5MB limit)
                if ($_FILES["image"]["size"] <= 5000000) {
                    // Allow certain file formats (jpg, png, jpeg, gif)
                    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
                        // Upload file
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // Insert into database with image path
                            $sql = "INSERT INTO service (title, description, image) VALUES ('$title', '$description', '$target_file')";
                        } else {
                            echo "Error uploading the image.";
                        }
                    } else {
                        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                    }
                } else {
                    echo "Sorry, your file is too large. Max size is 5MB.";
                }
            } else {
                echo "Sorry, file already exists.";
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        // Insert without image if no image is uploaded
        $sql = "INSERT INTO service (title, description) VALUES ('$title', '$description')";
    }

    // Execute query
    if (isset($sql) && $conn->query($sql) === TRUE) {
        echo "<script>alert('New service added successfully!');</script>";
        echo "<script>window.open('./addsirvice.php', '_self');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Service</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Back Button -->
        <a href="index.php" class="btn btn-secondary mb-3">Back</a>

        <h2 class="text-center">Add New Service</h2>
        <form action="./addsirvice.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            <div class="mb-3">
                <label for="title" class="form-label">Service Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image (optional)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>