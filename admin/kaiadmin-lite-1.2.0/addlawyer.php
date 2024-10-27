<?php
include("./db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $conn->real_escape_string($_POST['name']);
    $designation = $conn->real_escape_string($_POST['designation']);
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
            if (file_exists($target_file)) {
                echo "<script>alert('Sorry, file already exists.');</script>";
                echo "<script>window.open('./addlawyer.php', '_self');</script>";
                exit();
            }
            // Check file size (5MB limit)
            if ($_FILES["image"]["size"] > 500000000) {
                echo "<script>alert('File size exceeds 5MB. Please upload a smaller file.');</script>";
                echo "<script>window.open('./addlawyer.php', '_self');</script>";
                exit();
            }
            // Allow certain file formats (jpg, png, jpeg, gif)
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "<script>alert('Sorry, only JPG, JPEG, PNG, and GIF files are allowed.');</script>";
                echo "<script>window.open('./addlawyer.php', '_self');</script>";
                exit();
            }
            // If everything is okay, try to upload the file
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
                echo "<script>window.open('./addlawyer.php', '_self');</script>";
                exit();
            }
        } else {
            echo "<script>alert('File is not an image!');</script>";
            echo "<script>window.open('./addlawyer.php', '_self');</script>";
            exit();
        }
    }

    // SQL query to insert data (with image if uploaded)
    if (isset($target_file)) {
        $sql = "INSERT INTO lawyer (name, designation, description, image) VALUES ('$name', '$designation', '$description', '$target_file')";
    } else {
        $sql = "INSERT INTO lawyer (name, designation, description) VALUES ('$name', '$designation', '$description')";
    }

    // Check if the query is successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New lawyer added successfully!');</script>";
        echo "<script>window.open('./addlawyer.php', '_self');</script>";
    } else {
        echo "<script>alert('Error: Could not add lawyer.');</script>";
        echo "<script>window.open('./addlawyer.php', '_self');</script>";
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
    <title>Lawyer Registration Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Lawyer Registration</h2>
        <form action="./addlawyer.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>