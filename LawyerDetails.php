<?php
// Include your database connection
include("./db.php");

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $lawyer_id = $_GET['id'];

    // Fetch the lawyer details from the database
    $query = "SELECT * FROM lawyer WHERE id = '$lawyer_id'";
    $result = mysqli_query($conn, $query);

    // Check if the lawyer exists
    if (mysqli_num_rows($result) > 0) {
        $lawyer = mysqli_fetch_assoc($result);
        $name = $lawyer['name'];
        $designation = $lawyer['designation'];
        $description = $lawyer['description'];
        $created_at = $lawyer['created_at'];
        $image = $lawyer['image'];
    } else {
        echo "Lawyer not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Details - <?php echo $name; ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="./admin/kaiadmin-lite-1.2.0/<?php echo $image; ?>" class="card-img-top" alt="<?php echo $name; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $name; ?></h5>
                        <p class="card-text"><?php echo $designation; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <h2>About <?php echo $name; ?></h2>
                <p><?php echo $description; ?></p>
                <p><strong>Created At:</strong> <?php echo date('F j, Y', strtotime($created_at)); ?></p>
                <a href="./ourTeam.php" class="btn btn-primary">Back to Lawyers</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (for responsive functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
