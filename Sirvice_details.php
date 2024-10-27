<?php
include("./header.php");
?>
<main>
   <!--? Hero Start -->
   <div class="slider-area2">
      <div class="slider-height2 hero-overly2 d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-cap hero-cap2 text-center">
                     <h2>Service Details</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Hero End -->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <?php
            include("./db.php");

            // Get service ID from the URL
            $service_id = $_GET['service_id'];

            // Fetch the full description for this service
            $sql = "SELECT `title`, `description`, `image`, `created_at` FROM `service` WHERE `id` = $service_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               $row = $result->fetch_assoc();
            ?>
              
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="assets/img/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
                     </div>
                     <div class="blog_details">
                        <h2><?php echo $row['title']; ?>
                        </h2>
                        <pre>
                        <?php echo $row['description']; ?>
                         </pre>
                     </div>
                  </div>
               </div>
            <?php
            } else {
               echo "Service not found.";
            }

            $conn->close();
            ?>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

</main>
<?php

include("./footer.php")
?>