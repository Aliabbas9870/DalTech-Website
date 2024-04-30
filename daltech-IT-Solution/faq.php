
<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <meta name="description" content="DalTech - IT Solution & Technology Html Template">

        <title>DalTech - IT Solution & Technology </title>
        <!--<< Favcion >>-->
        <!-- <link rel="shortcut icon" href="assets/img/preloader.svg"> -->
        <link rel="shortcut icon" href="assets/images/logo.png">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--<< Slick.css >>-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--<< Style.css >>-->
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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Faq</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">


                        <li>
                            <i class="fal fa-minus"></i>
                        </li>
                        <li>
                            Faq
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Faq Section Start >>-->
        <section class="faq-section fix section-padding">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <span class="wow fadeInUp">FAQ</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Frequently Asked <br> Questions
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 mb-2 wow fadeInUp" data-wow-delay=".5s">
                                Sed ut perspiciatis unde omniste natus voluptatem <br> accusantiume rem  aperia eaque quae abillo inventore <br> veritatis quasi architecto beatae vitae
                            </p>
                            <a href="faq.php" class="theme-btn mt-4 wow fadeInUp" data-wow-delay=".7s">
                                <span> Read More <i class="fas fa-chevron-right"></i></span>
                            </a>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="single-tab-items">
                                <ul class="nav mb-4" role="tablist">
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                                        <a href="#general" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
                                            General
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                        <a href="#service" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Service
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".7s" role="presentation">
                                        <a href="#product" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Product
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".8s" role="presentation">
                                        <a href="#team" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Team
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".9s" role="presentation">
                                        <a href="#pricing" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Pricing
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="general" class="tab-pane fade show active" role="tabpanel">



                                    </div>
                                    <div id="service" class="tab-pane fade" role="tabpanel">
                                        <div class="faq-content">
                                            <div class="faq-accordion">
                                                <div class="accordion" id="accordion2">
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqt1" aria-expanded="false" aria-controls="faqt1">
                                                                How much does it cost to build an app?
                                                            </button>
                                                        </h4>
                                                        <div id="faqt1" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqt2" aria-expanded="true" aria-controls="faqt2">
                                                                Can you create an app for free?
                                                            </button>
                                                        </h4>
                                                        <div id="faqt2" class="accordion-collapse collapse show" data-bs-parent="#accordion2">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqt3" aria-expanded="false" aria-controls="faqt3">
                                                                How can I create my own app?
                                                            </button>
                                                        </h4>
                                                        <div id="faqt3" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqt4" aria-expanded="false" aria-controls="faqt4">
                                                                How do I start an app business?
                                                            </button>
                                                        </h4>
                                                        <div id="faqt4" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product" class="tab-pane fade" role="tabpanel">
                                        <div class="faq-content">
                                            <div class="faq-accordion">
                                                <div class="accordion" id="accordion3">
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqp1" aria-expanded="false" aria-controls="faqp1">
                                                                How much does it cost to build an app?
                                                            </button>
                                                        </h4>
                                                        <div id="faqp1" class="accordion-collapse collapse" data-bs-parent="#accordion3">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqp2" aria-expanded="true" aria-controls="faqp2">
                                                                Can you create an app for free?
                                                            </button>
                                                        </h4>
                                                        <div id="faqp2" class="accordion-collapse collapse show" data-bs-parent="#accordion3">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqp3" aria-expanded="false" aria-controls="faqp3">
                                                                How can I create my own app?
                                                            </button>
                                                        </h4>
                                                        <div id="faqp3" class="accordion-collapse collapse" data-bs-parent="#accordion3">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqp4" aria-expanded="false" aria-controls="faqp4">
                                                                How do I start an app business?
                                                            </button>
                                                        </h4>
                                                        <div id="faqp4" class="accordion-collapse collapse" data-bs-parent="#accordion3">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="team" class="tab-pane fade" role="tabpanel">
                                        <div class="faq-content">
                                            <div class="faq-accordion">
                                                <div class="accordion" id="accordion5">
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11" aria-expanded="false" aria-controls="faq11">
                                                                How much does it cost to build an app?
                                                            </button>
                                                        </h4>
                                                        <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#accordion5">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq22" aria-expanded="true" aria-controls="faq22">
                                                                Can you create an app for free?
                                                            </button>
                                                        </h4>
                                                        <div id="faq22" class="accordion-collapse collapse show" data-bs-parent="#accordion5">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq33" aria-expanded="false" aria-controls="faq33">
                                                                How can I create my own app?
                                                            </button>
                                                        </h4>
                                                        <div id="faq33" class="accordion-collapse collapse" data-bs-parent="#accordion5">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq44" aria-expanded="false" aria-controls="faq44">
                                                                How do I start an app business?
                                                            </button>
                                                        </h4>
                                                        <div id="faq44" class="accordion-collapse collapse" data-bs-parent="#accordion5">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pricing" class="tab-pane fade" role="tabpanel">
                                        <div class="faq-content">
                                            <div class="faq-accordion">
                                                <div class="accordion" id="accordion6">
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq15" aria-expanded="false" aria-controls="faq15">
                                                                How much does it cost to build an app?
                                                            </button>
                                                        </h4>
                                                        <div id="faq15" class="accordion-collapse collapse" data-bs-parent="#accordion6">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq25" aria-expanded="true" aria-controls="faq25">
                                                                Can you create an app for free?
                                                            </button>
                                                        </h4>
                                                        <div id="faq25" class="accordion-collapse collapse show" data-bs-parent="#accordion6">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq35" aria-expanded="false" aria-controls="faq35">
                                                                How can I create my own app?
                                                            </button>
                                                        </h4>
                                                        <div id="faq35" class="accordion-collapse collapse" data-bs-parent="#accordion6">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq45" aria-expanded="false" aria-controls="faq45">
                                                                How do I start an app business?
                                                            </button>
                                                        </h4>
                                                        <div id="faq45" class="accordion-collapse collapse" data-bs-parent="#accordion6">
                                                            <div class="accordion-body">
                                                                We approached WiaTech with complex project Designing a website can involve various such
                                                                as layout, graphics, content, and experience more specific response elaborate
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
                    </div>
                </div>
            </div>
        </section>

        
        <!--<< Project Details Image Start >>-->
        <div class="project-details-wrapper fix section-padding pt-0">
            <div class="container">
                <div class="project-details-image mt-0">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="details-image">
                                <img src="assets/img/project/details.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="details-image">
                                <img src="assets/img/project/details-2.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<< Faq Section Start >>-->
        <section class="faq-section section-padding pt-0">
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
                                    <div class="accordion" id="accordions">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq133" aria-expanded="false" aria-controls="faq133">
                                                    How to learn digital marketing?
                                                </button>
                                            </h4>
                                            <div id="faq133" class="accordion-collapse collapse" data-bs-parent="#accordions">
                                                <div class="accordion-body">
                                                    Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq233" aria-expanded="true" aria-controls="faq233">
                                                    Can I use the demos made by Ewebot?
                                                </button>
                                            </h4>
                                            <div id="faq233" class="accordion-collapse collapse show" data-bs-parent="#accordions">
                                                <div class="accordion-body">
                                                    Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3333" aria-expanded="false" aria-controls="faq3333">
                                                    Why didn’t you showcase my submission?
                                                </button>
                                            </h4>
                                            <div id="faq3333" class="accordion-collapse collapse" data-bs-parent="#accordions">
                                                <div class="accordion-body">
                                                    Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4444" aria-expanded="false" aria-controls="faq4444">
                                                    Why didn’t you showcase my submission?
                                                </button>
                                            </h4>
                                            <div id="faq4444" class="accordion-collapse collapse" data-bs-parent="#accordions">
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

        <!--<< Brand Section Start >>-->
        <div class="brand-section-2 fix section-bg-2 mt-0">
            <div class="container">
                <div class="brand-wrapper style-2">
                    <div class="brand-carousel-active-2">
                        <div class="brand-image">
                            <img src="assets/img/brand/01.png" alt="brand-img">
                        </div>
                        <div class="brand-image">
                            <img src="assets/img/brand/01.png" alt="brand-img">
                        </div>
                        <div class="brand-image">
                            <img src="assets/img/brand/01.png" alt="brand-img">
                        </div>
                        <div class="brand-image">
                            <img src="assets/img/brand/01.png" alt="brand-img">
                        </div>
                        <div class="brand-image">
                            <img src="assets/img/brand/01.png" alt="brand-img">
                        </div>
                        <div class="brand-image">
                            <img src="assets/img/brand/01.png" alt="brand-img">
                        </div>
                        <div class="brand-image">
                            <img src="assets/img/brand/01.png" alt="brand-img">
                        </div>
                    </div>
                </div>
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