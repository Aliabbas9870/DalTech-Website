<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daltech";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contactform (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === true) {
        echo "<script>alert('Thanks for Contacting. We\'ll respond to you soon.'); </script>";
        exit;
    } else {
        echo "<script>alert('Exception Found. Please contact us using our Email.');</script>";
        exit;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
       <meta name="description" content="DalTech - IT Solution & Technology Html Template">
        <title>FA21- IT Solution & Technology </title>
        <link rel="shortcut icon" href="assets/images/logo.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/font-awesome.css">

        <link rel="stylesheet" href="assets/css/animate.css">

        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <link rel="stylesheet" href="assets/css/meanmenu.css">

        <link rel="stylesheet" href="assets/css/slick.css">

        <link rel="stylesheet" href="assets/css/nice-select.css">

        <link rel="stylesheet" href="assets/css/main.css">

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
          <div class="spinner">
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--<< Mouse Cursor Start >>-->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
      

        <?php
include "components/title-header.php";
include "components/config.php";
?>
        <!-- Header Top Start -->
    

    
        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/images/banner.png');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        
                
            
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Contact Section Start >>-->
        <section class="contact-main-area fix section-padding">
            <div class="container">
                <div class="contact-main-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <div class="section-title mb-2">
                                    <span class="wow fadeInUp">Get In Touch</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h2>
                                </div>
                                <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque inventore
                                </p>
                                <div class="row g-4 mt-3">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Location</h5>
                                                <p>
                                                    Ali Abbas cs Sahiwal <br>
                                                    Punjab, Pakistan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="far fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Phone</h5>
                                                <a href="tel:+09354587874">+92 325 180 6654 </a> <br>
                                                <a href="tel:+01368567894">+01 368 567 894</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Email</h5>
                                                <a href="mailto:info@example.com" class="link">aliab7357@gmail.com</a> <br>
                                                <a href="mailto:info@example.com" class="link">info@example.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".9s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="fad fa-share-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Social</h5>
                                                <div class="social-icon d-flex align-items-center">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-image wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/images/about/about.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="contact-form-items">
                                <div class="contact-title">
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <form action="contact.php" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name*">
                                                <div class="icon">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" placeholder="Email Address*">
                                                <div class="icon">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Enter Your Messege here"></textarea>
                                                <div class="icon">
                                                    <i class="fal fa-edit"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                            <button type="submit" class="theme-btn">
                                                <span><i class="fal fa-paper-plane"></i>Get In Touch</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="map-section">
            <div class="google-map wow fadeInUp" data-wow-delay=".7s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!--<< Footer Section Start >>-->
        <?php require 'components/footer.php'?>

         <!--<< All JS Plugins >>-->
         <script src="assets/js/jquery-3.7.1.min.js"></script>
         <!--<< Viewport Js >>-->
         <script src="assets/js/viewport.jquery.js"></script>
         <!--<< Bootstrap Js >>-->
         <script src="assets/js/bootstrap.bundle.min.js"></script>
         <!--<< Nice Select Js >>-->
         <script src="assets/js/jquery.nice-select.min.js"></script>
         <!--<< Waypoints Js >>-->
         <script src="assets/js/jquery.waypoints.js"></script>
         <!--<< Counterup Js >>-->
         <script src="assets/js/jquery.counterup.min.js"></script>
         <!--<< Slick Js >>-->
         <script src="assets/js/slick.min.js"></script>
         <!--<< Slick Animation Js >>-->
         <script src="assets/js/slick-animation.min.js"></script>
         <!--<< MeanMenu Js >>-->
         <script src="assets/js/jquery.meanmenu.min.js"></script>
         <!--<< Magnific Popup Js >>-->
         <script src="assets/js/jquery.magnific-popup.min.js"></script>
         <!--<< Wow Animation Js >>-->
         <script src="assets/js/wow.min.js"></script>
         <!--<< Circle Progress Js >>-->
         <script src="assets/js/circle-progress.js"></script>
         <!--<< Ajax Mail Js >>-->
         <script src="assets/js/ajax-mail.js"></script>
         <!--<< Main.js >>-->
         <script src="assets/js/main.js"></script>
    </body>


</html>
