<?php
include("./db.php");

// Fetch all lawyers from the database
$sql = "SELECT * FROM lawyer";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer List</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Custom Button Styles */

    .btn-update {
        background-color: #ffc107;
        /* Bootstrap warning color */
        border-color: #ffc107;
        color: #fff;
        margin-bottom: 20px;
    }

    .btn-update:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-delete {
        background-color: #dc3545;
        /* Bootstrap danger color */
        border-color: #dc3545;
        color: #fff;
    }

    .btn-delete:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-back {
        background-color: #6c757d;
        /* Bootstrap secondary color */
        border-color: #6c757d;
        color: #fff;
    }

    .btn-back:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }

    img {
        object-fit: cover;
        width: 50px;
        height: 50px;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-center">Lawyer List</h2>
            <a href="index.php" class="btn btn-back">Back</a>
        </div>

        <!-- Lawyer Table -->
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['designation'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td><img src='" . $row['image'] . "' alt='Lawyer Image'></td>";
                        echo "<td>";
                        echo "<a href='updatelawyer.php?id=" . $row['id'] . "' class='btn btn-update btn-sm'>Update</a> ";
                        echo "<a href='deletelawyer.php?id=" . $row['id'] . "' class='btn btn-delete btn-sm' onclick='return confirm(\"Are you sure you want to delete this lawyer?\")'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No lawyers found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
$conn->close();
?>