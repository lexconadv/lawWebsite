<?php
include("./header.php");
?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2  d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Our Practicing area</span>
                        <h2>Area Of Practice That Can Help You To Win</h2>
                    </div>
                </div>
            </div>
            <div class="row">



                <?php
                include("./db.php");
                // Query to fetch data from the `service` table
                $sql = "SELECT `id`, `title`, `description`, `image`, `created_at` FROM `service` WHERE 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data for each row
                    while ($row = $result->fetch_assoc()) {
                        // Limit the description to 20 words
                        $fullDescription = $row['description'];
                        $descriptionWords = explode(" ", $fullDescription);
                        $shortDescription = implode(" ", array_slice($descriptionWords, 0, 10)) . '...';
                ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat mb-50">
                                <div class="cat-icon">
                                    <!-- <img src="<?php// echo $row['image']; ?>" alt="<?php// echo $row['title']; ?>"> -->
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php"><?php echo $row['title']; ?></a></h5>
                                    <p><?php echo $shortDescription; ?></p>
                                    <a href="Sirvice_details.php?service_id=<?php echo $row['id']; ?>" class="read-more1">Read More ></a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No services found.";
                }

                $conn->close();
                ?>






            </div>
        </div>
    </div>
</main>
<?php

include("./footer.php")
?>