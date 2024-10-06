<?php
include("./db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch lawyer details by ID
    $sql = "SELECT * FROM lawyer WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $lawyer = $result->fetch_assoc();
    } else {
        echo "<script>alert('Lawyer not found');</script>";
        echo "<script>window.open('./viewlawyer.php', '_self');</script>";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $designation = $conn->real_escape_string($_POST['designation']);
    $description = $conn->real_escape_string($_POST['description']);

    // Image upload handling (optional)
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . time() . "_" . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false && $_FILES["image"]["size"] <= 5000000) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $sql = "UPDATE lawyer SET name='$name', designation='$designation', description='$description', image='$target_file' WHERE id=$id";
        } else {
            echo "<script>alert('File is not valid or too large');</script>";
        }
    } else {
        $sql = "UPDATE lawyer SET name='$name', designation='$designation', description='$description' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Lawyer updated successfully!');</script>";
        echo "<script>window.open('./viewlawyer.php', '_self');</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Lawyer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Update Lawyer</h2>

        <form action="" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $lawyer['name']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation"
                    value="<?php echo $lawyer['designation']; ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"
                    rows="4"><?php echo $lawyer['description']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Update Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Update Lawyer</button>
            <a href="viewlawyer.php" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>