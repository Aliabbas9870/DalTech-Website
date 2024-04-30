<?php include"assets/components/config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICON -->
    <link rel="icon" href="assets/img/favicon.png">
    <!--   Title Page -->
    <title>Dashboard </title>
    <!-- bootstrap.min.css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- material fonts.css -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- style.css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- responsive.css -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- theme-color.css -->
    <link href="assets/css/theme-color.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--  Header area end -->
    <!--  Nav menu area start -->
   <?php require "assets/components/naverbarLeft.php"?>
    <!-- /.dash-navbar-left -->
    <!--  Homepage sec 1 start -->
    <div class="main-wraper-bg mar_lft_282">
        <div class="homepage-sec1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Dashboard</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="homepage-sec1-single">
                            <span class="sec_icon"><i class="zmdi zmdi-money"></i></span>
                            <div class="homepage-sec1-fl-right">
                                <h4>Daily sales</h4>
                                <h3>$30, <span class="single-count">305</span></h3>
                            </div>
                            <p>Total items sold <span class="fl_right">GOOD <i
                                        class="zmdi zmdi-long-arrow-up"></i></span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="homepage-sec1-single cta2">
                            <span class="sec_icon"><i class="zmdi zmdi-accounts"></i></span>
                            <div class="homepage-sec1-fl-right">
                                <h4>Visitors</h4>
                                <h3>75,<span class="single-count">843</span></h3>
                            </div>
                            <p>Visitors <span class="fl_right">NORMAL <i class="zmdi zmdi-long-arrow-down"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="homepage-sec1-single cta3">
                            <span class="sec_icon"><i class="zmdi zmdi-email"></i></span>
                            <div class="homepage-sec1-fl-right">
                                <h4>Messages</h4>
                                <h3><span class="single-count">1224</span></h3>
                            </div>
                            <p>Last month <span class="fl_right">NORMAL <i class="zmdi zmdi-long-arrow-down"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="homepage-sec1-single cta4">
                            <span class="sec_icon"><i class="zmdi zmdi-favorite"></i></span>
                            <div class="homepage-sec1-fl-right">
                                <h4>Followers</h4>
                                <h3>+<span class="single-count">38</span>K</h3>
                            </div>
                            <p>Update now<span class="fl_right">UPDATE <i class="zmdi zmdi-refresh"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Homepage sec 1 end -->
        <!--  Homepage sec 2 start -->
        <div class="homepage-sec2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="home-line-chart">
                            <h3>Weekly stats</h3>
                            <canvas id="lineChart"></canvas>
                        </div>
                       
                       
                    </div>
                    <div class="col-lg-3">
                        <div class="home_right_client">
                            <h3>New Client</h3>
                            <div class="home_right_single_cl">
                                <img src="assets/img/client-img1.png" alt="">
                                <div class="home_client_text">
                                    <h5><a href="#"> Dickens</a></h5>
                                    <p>10 Minit ago</p>
                                </div>
                            </div>
                            <div class="home_right_single_cl">
                                <img src="assets/img/client-img2.png" alt="">
                                <div class="home_client_text">
                                    <h5> <a href="#">Powlowski</a></h5>
                                    <p>5 Minit ago</p>
                                </div>
                            </div>
                            <div class="home_right_single_cl">
                                <img src="assets/img/client-img3.png" alt="">
                                <div class="home_client_text">
                                    <h5><a href="#">Mathew </a></h5>
                                    <p>6 Minit ago</p>
                                </div>
                            </div>
                            <div class="home_right_single_cl">
                                <img src="assets/img/client-img4.png" alt="">
                                <div class="home_client_text">
                                    <h5><a href="#">Alice</a></h5>
                                    <p>8 Minit ago</p>
                                </div>
                            </div>
                            <div class="home_right_single_cl">
                                <img src="assets/img/client-img5.png" alt="">
                                <div class="home_client_text">
                                    <h5><a href="#">Delbert</a></h5>
                                    <p>12 Minit ago</p>
                                </div>
                            </div>
                        </div>
                      
                    
                    </div>
                </div>
                <div class="home_table_area form-shadow">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="home_table_title">
                                <h3>Latest Projects</h3>
                            </div>
                        </div>
                    </div>
                    <div class="basic-table cta">
                        <div class="row">
                            <div class="col-lg-12 table_basic1">
                                <table class="responsive-table-input-matrix">
                                    <thead>
                                        <tr>
                                            <th>Project Id</th>
                                            <th>Project Name</th>
                                            <th>Start Date</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Assign</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Web design</td>
                                            <td>01 Jan 2018</td>
                                            <td>12 Jan 2018</td>
                                            <td><a class="active_c" href="#">Active</a></td>
                                            <td>Turcotte</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>App design</td>
                                            <td>03 May 2018</td>
                                            <td>23 Jul 2018</td>
                                            <td><a class="active_c" href="#">Active</a></td>
                                            <td>Legros</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Deshboard design</td>
                                            <td>23 Feb 2018</td>
                                            <td>12 Mar 2018</td>
                                            <td><a class="cooming_soon" href="#">Disabaled</a></td>
                                            <td>Parker</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Product design</td>
                                            <td>23 Jul 2018</td>
                                            <td>26 Aug 2018</td>
                                            <td><a class="progres" href="#">Suspended</a></td>
                                            <td>Harber</td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>E-comerce design</td>
                                            <td>13 Jul 2018</td>
                                            <td>19 Sep 2018</td>
                                            <td><a class="active_c" href="#">Active</a></td>
                                            <td>Beatty</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Homepage sec 2 end -->
  
  <?php require "assets/components/footer.php"?>
    
    <script src="assets/js/jquery.js"></script>
 
    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/js/inview.js"></script>
   
    <script src="assets/js/counter.js"></script>
    
    <script src="assets/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  
    <script src="assets/js/dashboard.js"></script>
  
    <script src="assets/js/dashboard-map.js"></script>

    <script src="assets/js/jquery.touchSwipe.min.js"></script>
    <!-- chart.min.js -->
    <script src="assets/js/chart.min.js"></script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>
    <!-- custom-theme.js -->
    <script src="assets/js/custom-theme.js"></script>
</body>


</html>