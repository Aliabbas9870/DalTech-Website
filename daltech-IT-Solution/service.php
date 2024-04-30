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
    $service = $conn->real_escape_string($_POST['service']);
    $message = $conn->real_escape_string($_POST['message']);
    $sql = "INSERT INTO helpserviceform (name, email, service, message) VALUES ('$name', '$email', '$service', '$message')";
    if ($conn->query($sql) === true) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href = 'index.php';</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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

        <title>DalTech - IT Solution & Technology</title>

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
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Header Top Start -->


        <!-- Header Area Start -->
        <?php
include "components/title-header.php";
// include "../daltech-html/components/config.";
?>

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">our services</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">


                    </ul>
                </div>
            </div>
        </div>

        <!--<< Service Section Start >>-->
        <section class="service-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">our fucusable services</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        How do we work to help you <br>
                        in Startup Business
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-coding"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="service-details.php">
                                        Customer Software
                                        Development
                                    </a>
                                </h3>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="service-details.php" class="arrow-icon">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-box-items active">
                            <div class="icon">
                                <i class="flaticon-server"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="service-details.php">
                                        Desktop Computing
                                        Services
                                    </a>
                                </h3>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="service-details.php" class="arrow-icon">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-service"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="service-details.php">
                                        Infrastructure Plan
                                        & Business Reform
                                    </a>
                                </h3>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="service-details.php" class="arrow-icon">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-data-science"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="service-details.php">
                                        Data & Cyber <br>
                                        security Managment
                                    </a>
                                </h3>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="service-details.php" class="arrow-icon">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-technology-1"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="service-details.php">
                                        Firewall Advancement <br>
                                        & Defender System
                                    </a>
                                </h3>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="service-details.php" class="arrow-icon">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-server"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="service-details.php">
                                        Apps Development <br>
                                        & UI/UX Project
                                    </a>
                                </h3>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="service-details.php" class="arrow-icon">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-service"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="service-details.php">
                                        Backup & Recovery
                                        Data services
                                    </a>
                                </h3>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="service-details.php" class="arrow-icon">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-data-science"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="service-details.php">
                                        Data & Cyber <br>
                                        security Managment
                                    </a>
                                </h3>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="service-details.php" class="arrow-icon">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Cta Banner Section Start >>-->
        <section class="cta-banner-section bg-cover section-padding" style="background-image: url('assets/img/banner/01.jpg');">
            <div class="container">
                <div class="cta-banner-wrapper section-padding pt-0">
                    <div class="section-title mb-0">
                        <span class="wow fadeInUp">5m+ Trusted Our Clients</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            Need It advisor For your business ? <br>
                            Please Call : <a href="tel:03251806654" class="theme-color-1">03251806654</a>
                        </h2>
                    </div>
                    <a href="contact.php" class="theme-btn hover-white wow fadeInUp" data-wow-delay=".5s">
                        <span>
                            Get a Free Quate
                           <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!--<< Feature Icon Box Section Start >>-->
        <section class="feature-icon-box-area-2">
            <div class="container">
                <div class="feature-icon-box-wrapper">
                    <div class="row g-4">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon-box-items">
                                <div class="icon">
                                    <i class="flaticon-microchip"></i>
                                </div>
                                <div class="content">
                                    <h3>Voice Over Protocol</h3>
                                    <p>
                                        Average time to resolve a
                                        cyber attack.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-box-items active">
                                <div class="icon">
                                    <i class="flaticon-cloud-storage"></i>
                                </div>
                                <div class="content">
                                    <h3>Data Backup</h3>
                                    <p>
                                        Average time to resolve a
                                        cyber attack.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-box-items">
                                <div class="icon">
                                    <i class="flaticon-gear"></i>
                                </div>
                                <div class="content">
                                    <h3>It Consultancy</h3>
                                    <p>
                                        Average time to resolve a
                                        cyber attack.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Faq Section Start >>-->
        <section class="faq-section section-padding section-bg-2">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">freequently Ask Questions</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        have a question in <br>
                                        your mind?
                                    </h2>
                                </div>
                                <p class=" mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Transmds is the world’s driving worldwide coordinations <br>
                                    supplier — we uphold industry and exchange the
                                </p>
                                <div class="circle-progress-bar-wrapper">
                                    <div class="single-circle-bar wow fadeInUp" data-wow-delay=".7s">
                                        <div class="circle-bar" data-percent="68" data-duration="1000">
                                        </div>
                                        <div class="content">
                                            <h6>
                                                Organizations <br>
                                                work support
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="single-circle-bar wow fadeInUp" data-wow-delay=".9s">
                                        <div class="circle-bar" data-percent="93" data-duration="1000">
                                        </div>
                                        <div class="content">
                                            <h6>
                                                Management & <br>
                                                Support Services
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="faq-content style-2 style-color">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                                    How to learn digital marketing?
                                                </button>
                                            </h4>
                                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                                    Can I use the demos made by Ewebot?
                                                </button>
                                            </h4>
                                            <div id="faq2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    Why didn’t you showcase my submission?
                                                </button>
                                            </h4>
                                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                    Why didn’t you showcase my submission?
                                                </button>
                                            </h4>
                                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Testimonial Section Start >>-->
        <section class="testimonial-section-2 fix section-padding">
            <div class="container-fluid">
                <div class="testimonial-wrapper-3 pt-0 pb-0 style-2">
                    <div class="testimonial-carousel-active-3">
                        <div class="testimonial-items">
                            <div class="testimonial-image-area">
                                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/06.jpg');">
                                    <div class="icon">
                                        <i class="flaticon-double-quotes"></i>
                                    </div>
                                </div>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <h3>
                                    Climb the mountain not to plant your flag but to embrace
                                    the ways challenge, enjoy the air, and behold the. Climb it
                                    see the world, not so the world can see you. This is due to their excellent service competitive pricing
                                </h3>
                                <div class="athor-name">
                                    <h4>Robert J. Hare/</h4>
                                    <p>Graphics Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-items">
                            <div class="testimonial-image-area">
                                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/07.jpg');">
                                    <div class="icon">
                                        <i class="flaticon-double-quotes"></i>
                                    </div>
                                </div>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <h3>
                                    Climb the mountain not to plant your flag but to embrace
                                    the ways challenge, enjoy the air, and behold the. Climb it
                                    see the world, not so the world can see you. This is due to their excellent service competitive pricing
                                </h3>
                                <div class="athor-name">
                                    <h4>Robert J. Hare/</h4>
                                    <p>Graphics Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-items">
                            <div class="testimonial-image-area">
                                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/08.jpg');">
                                    <div class="icon">
                                        <i class="flaticon-double-quotes"></i>
                                    </div>
                                </div>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <h3>
                                    Climb the mountain not to plant your flag but to embrace
                                    the ways challenge, enjoy the air, and behold the. Climb it
                                    see the world, not so the world can see you. This is due to their excellent service competitive pricing
                                </h3>
                                <div class="athor-name">
                                    <h4>Robert J. Hare/</h4>
                                    <p>Graphics Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-items">
                            <div class="testimonial-image-area">
                                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/09.jpg');">
                                    <div class="icon">
                                        <i class="flaticon-double-quotes"></i>
                                    </div>
                                </div>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <h3>
                                    Climb the mountain not to plant your flag but to embrace
                                    the ways challenge, enjoy the air, and behold the. Climb it
                                    see the world, not so the world can see you. This is due to their excellent service competitive pricing
                                </h3>
                                <div class="athor-name">
                                    <h4>Robert J. Hare/</h4>
                                    <p>Graphics Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-button">
                        <div class="testimonial-nav-prev"><i class="fas fa-long-arrow-left"></i></div>
                        <div class="testimonial-nav-next"><i class="fas fa-long-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< News Section Start >>-->
  

        <!--<< Contact Section Start >>-->
        <section class="contact-section-2 fix section-padding bg-cover" style="background-image: url('assets/img/contact-bg.jpg');">
            <div class="contact-image">
                <img src="assets/img/contact-2.png" alt="contact-img">
            </div>
            <div class="container">
                <div class="contact-wrapper-2">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">IT Support Help</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">let,s work together</h2>
                                </div>
                                <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    We denounce with righteous indignation and like men <br>
                                    beguiled and demoralized by the charms
                                </p>
                                <div class="contact-info-area">
                                    <div class="contact-info-items style-2 mb-4 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <p>Call For Inquiry</p>
                                            <h3><a href="tel:+23645689622">+92 3251806654</a></h3>
                                        </div>
                                    </div>
                                    <div class="contact-info-items style-2 mb-4 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <p>Send Us Email</p>
                                            <h3><a href="mailto:info@example.com">aliabbas@gmail.com</a></h3>
                                        </div>
                                    </div>
                                    <div class="contact-info-items style-2 wow fadeInUp" data-wow-delay=".9s">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            <p>Location</p>
                                            <h3>Sahiwal punjab Pakistan</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="contact-box">
                                <div class="contact-title">
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">Need Help For Project!</h3>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">We are ready to help your next projects, let’s work together</p>
                                </div>
                                <div class="contact-form-items">
                                <form action="#" id="contact-form" method="POST">
    <div class="row g-3">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">
                <input type="text" name="name" id="name" placeholder="Name">
                <div class="icon">
                    <i class="far fa-user"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="form-clt">
                <input type="text" name="email" id="email" placeholder="Email">
                <div class="icon">
                    <i class="far fa-envelope"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">
                <select name="service" id="service">
                    <option value="Default sorting">Default sorting</option>
                    <option value="Sort by popularity">Sort by popularity</option>
                    <option value="Sort by average rating">Sort by average rating</option>
                    <option value="Sort by latest">Sort by latest</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
            <div class="form-clt">
                <textarea name="message" id="message" placeholder="Write Your Message"></textarea>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".4s">
            <button type="submit" class="theme-btn center d-block">
                <span>
                    Send Us Messages
                    <i class="fas fa-chevron-right"></i>
                </span>
            </button>
        </div>
    </div>
</form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
         <!--<< Main.js >>-->
         <script src="assets/js/main.js"></script>
    </body>
</html>
