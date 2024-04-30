<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {

    header("Location: login.php");
    exit();
}
?>
<?php
include "components/title-header.php";
// include "components/config.php";
?>
<!-- /////////////////////////////////////////////////////////////// -->
                      <!-- update 27-04-2024 -->
<!-- /////////////////////////////////////////////////////////////// -->
<!DOCTYPE html>
<html lang="en">
<head>
     <title><?php echo (constant('SiteTitle')) ?></title>
   <?php include 'include/links.php'?>
</head>
<body>
    <?php include 'include/pre-loader.php'?>
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.php">
                                <img src="assets/img/logo/logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Sahiwal, Punjab, Pakistan</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@azent.com"><span
                                            class="mailto:info@azent.com">fa21-bcs-034@students.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+92 3251806654</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.php" class="theme-btn text-center">
                                <span>Contact Us<i class="fas fa-chevron-right"></i></span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <section class="hero-section hero-1">
        <div class="hero-slider-active">
            <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/hero/hero-2.jpg');">
                <div class="container">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <h4 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">5m+
                                    Trusted Our Clients</h4>
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                    Empower Your
                                    business Journey
                                    with it Expertise
                                </h1>
                                <div class="hero-button">
                                    <a href="service-details.php" class="theme-btn hover-white fs-lg animated"
                                        data-animation-in="fadeInRight" data-delay-in="0.7">
                                        <span>
                                            Explore Our Service
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="frame-shape fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                <!-- <img src="../assets/images/Service/logoDal.jpg" alt="shape-img"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('../assets/images/Service/logoDal.jpg');">
                <div class="container">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <h4 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">5m+
                                    Trusted Our Clients</h4>
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                    Empower Your
                                    business Journey
                                    with it Expertise
                                </h1>
                                <div class="hero-button">
                                    <a href="service-details.php" class="theme-btn hover-white fs-lg animated"
                                        data-animation-in="fadeInRight" data-delay-in="0.7">
                                        <span>
                                            Explore Our Service
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="frame-shape fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                <img src="assets/img/hero/frame-shape.png" alt="shape-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/hero/hero-3.jpg');">
                <div class="container">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <h4 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">5m+
                                    Trusted Our Clients</h4>
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                    Empower Your
                                    business Journey
                                    with it Expertise
                                </h1>
                                <div class="hero-button">
                                    <a href="service-details.php" class="theme-btn hover-white fs-lg animated"
                                        data-animation-in="fadeInRight" data-delay-in="0.7">
                                        <span>
                                            Explore Our Service
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="frame-shape fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                <img src="assets/img/hero/frame-shape.png" alt="shape-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/hero/hero-1.jpg');">
                <div class="container">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <h4 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">5m+
                                    Trusted Our Clients</h4>
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                    Empower Your
                                    business Journey
                                    with it Expertise
                                </h1>
                                <div class="hero-button">
                                    <a href="service-details.php" class="theme-btn hover-white fs-lg animated"
                                        data-animation-in="fadeInRight" data-delay-in="0.7">
                                        <span>
                                            Explore Our Service
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="frame-shape fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                <img src="assets/img/hero/frame-shape.png" alt="shape-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="translandcircle" />
            </symbol>
        </svg>
    </section>
    <?php include 'components/counter-section.php'?>

    <section class="cta-chat-section section-padding pt-0">
        <div class="container">
            <div class="cta-chat-wrapper">
                <div class="chat-items wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon">
                        <i class="flaticon-chat"></i>
                    </div>
                    <div class="content">
                        <h3>Let’s Discuss & Start IT Consultations</h3>
                        <p>Hi Guys Welcome To Our WebSite Here you find the IT solution</p>
                    </div>
                </div>
                <a href="contact.php" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                    <span>
                        Lets Get Started
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <?php require 'components/contact-section.php'?>

  <?php require 'components/footer.php'?>
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <script src="assets/js/viewport.jquery.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/jquery.waypoints.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/slick-animation.min.js"></script>

    <script src="assets/js/jquery.meanmenu.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/circle-progress.js"></script>

    <script src="assets/js/main.js"></script>
</body>


</html>