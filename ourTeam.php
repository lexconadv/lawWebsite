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
                                <h2>Find Your Career</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Categories Area Start -->
         <!-- Hero End -->
         <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <span>Our lawyers </span>
                            <h2>Meet Our Dedicated Team Members.</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->

                    <?php 
   include("./db.php");
   $get_user = "SELECT * FROM lawyer";
   $run_user = mysqli_query($conn, $get_user);
   
   while($row_user = mysqli_fetch_array($run_user)){
      $id = $row_user['id'];
      $name = $row_user['name'];
      $designation = $row_user['designation'];
      $description = $row_user['description'];
      $created_at = $row_user['created_at'];
      $image = $row_user['image'];
?>
   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
      <div class="single-team mb-30">
         <div class="team-img">
            <img src='./admin/kaiadmin-lite-1.2.0/<?php echo $image; ?>' alt='<?php echo $image; ?>'>
         </div>
         <div class="team-caption">
            <h3><a href="LawyerDetails.php?id=<?php echo $id; ?>"><?php echo $name; ?></a></h3>
            <span><?php echo $designation; ?></span>
         </div>
      </div>
   </div>
<?php } ?>

                </div>
            </div>
        </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-10">
                        <div class="about-details-cap mb-50">
                            <h4>Problem that we face</h4>
                            <p>Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.
                             </p>
                             <p> Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.</p>
                        </div>
                        <div class="about-details-cap mb-50">
                            <h4>How we overcome</h4>
                            <p>Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.
                             </p>
                             <p> Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php

include("./footer.php")
?>