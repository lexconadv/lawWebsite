<?php
include("./header.php");
?>
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >Dont Feel Helpless We Fight for Justice</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="about.php" class="btn hero-btn">Learn About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >Dont Feel Helpless We Fight for Justice</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="about.html" class="btn hero-btn">Learn About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-car"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Health Law </a></h5>
                            <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                            <a href="services.html" class="read-more1">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-doctor"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Insurance Law</a></h5>
                            <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                            <a href="services.html" class="read-more1">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-life"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Vehicle Accident </a></h5>
                            <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                            <a href="services.php" class="read-more1">Read More ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



   <?php
   include("./aboutLawaaaagency.php");

   ?>



    <!-- Contact form Start -->
    <div class="contact-form bg-height pb-top" id="contact-form"data-background="assets/img/gallery/section_bg05.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="form-wrapper">
                    <!--Section Tittle  -->
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle2 mb-70">
                                    <span>Fill up to get a qote</span>
                                    <h2>World's Leading Law Consultency Agency !</h2>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box user-icon mb-30">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box email-icon mb-30">
                                    <input type="text" name="email" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <div class="select-itms">
                                    <select name="select" id="select2">
                                        <option value="">Health Law</option>
                                        <option value="">saiful islam</option>
                                        <option value="">Arafath Miya</option>
                                        <option value="">Shakil Miya</option>
                                        <option value="">Tamim Sharker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box subject-icon mb-30">
                                    <input type="Email" name="subject" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box message-icon mb-30">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                            <div class="submit-info">
                                    <button class="submit-btn2" type="submit">Submit Now</button>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <!-- <div class="from-shape d-none d-xl-block">
            <img src="assets/img/gallery/from_Shape.png" alt="">
        </div> -->
    </div>
    <!-- Contact form End -->
    <!--? Services Ara Start -->
    <div class="services-area section-padding3">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="cl-xl-6 col-lg-6 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle ">
                        <span>our recent work</span>
                        <h2>Reliable, Effective & Wining Law For Customers</h2>
                    </div> 
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Accident Law </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">  Health Law</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Insurance Law </a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services1.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                    <p><a href="cases_details.php">Within the construction industry as their overdraft</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services2.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.html">Construction industry as their over draft for critical law</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services3.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.html">Retail banks wake up to digital lending this year</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services4.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Within the construction industry as their overdraft</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services1.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Within the construction industry as their overdraft</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services2.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Construction industry as their over draft for critical law</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services3.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Retail banks wake up to digital lending this year</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services4.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Within the construction industry as their overdraft</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card three -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services1.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Within the construction industry as their overdraft</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services2.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Construction industry as their over draft for critical law</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services3.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Retail banks wake up to digital lending this year</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="single-services mb-100">
                                <div class="services-img">
                                    <img src="assets/img/gallery/services4.png" alt="">
                                    </div>
                                    <div class="services-caption">
                                    <span>Car Accident Law</span>
                                   <p><a href="cases_details.php">Within the construction industry as their overdraft</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </div>
    <!-- Services Ara End -->
    <!-- Want To work -->
    <section class="wantToWork-area w-padding2 section-bg" data-background="assets/img/gallery/section_bg03.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Are you Searching For a First-Class Consultant?</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="#" class="btn btn-black f-right">Contact Naw </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!-- Team Start -->
    <?php include("./ourLawyer.php");?>
    <!-- Team End -->


    <!-- Blog Area Start -->
    <div class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-tittle mb-100">
                        <span>Insight and Trends  Articles</span>
                        <h2>Lawyers news from around the world selected by us.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home_blog1.png" alt="">
                                <ul>
                                    <li>By Admin   -   October 27, 2020</li>
                                </ul>
                            </div>
                            <div class="blog-cap">
                                <h3><a href="blog_details.html">16 Easy Ideas to Use in Our Everyday
                                    Stuff in Kitchen.</a></h3>
                                <p>Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnua Quis ipsum suspendisse ultrices gra.</p>
                                <a href="blog_details.html" class="more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home_blog2.png" alt="">
                                <ul>
                                    <li>By Admin   -   October 27, 2020</li>
                                </ul>
                            </div>
                            <div class="blog-cap">
                                <h3><a href="blog_details.html">16 Easy Ideas to Use in Our Everyday
                                    Stuff in Kitchen.</a></h3>
                                <p>Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnua Quis ipsum suspendisse ultrices gra.</p>
                                <a href="blog_details.html" class="more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
</main>

<?php

include("./footer.php")
?>