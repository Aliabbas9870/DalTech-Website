<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICON -->
    <link rel="icon" href="assets/img/favicon.png">
    <!--   Title Page -->
    <title>Calendar</title>
    <!-- bootstrap.min.css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- material fonts.css -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- calendar.css -->
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
    <!-- nice select.css -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
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

    <!--  custom theme area start -->
    <div class="theme_toggle">
        <!-- theme toggle btn start-->
        <span class="theme-icon"><i class="zmdi zmdi-settings"></i></span>
    </div>
    <div class="custom-theme">
        <h4 class="title-theme">Configuration</h4>
        <div class="theme-switch">
            <span class="title_meta">Background Image</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>
        <div class="filter-color">
            <span class="filter-title">Filters</span>
            <span class="color_green"></span>
            <span class="color_blue"></span>
            <span class="color_black"></span>
        </div>
        <div class="theme-image">
            <h4>Sidebar image & Background</h4>
            <span class="theme_img1"><img src="assets/img/theme-img1.jpg" alt=""></span>
            <span class="theme_img2"><img src="assets/img/theme-img2.jpg" alt=""></span>
            <span class="theme_img3"><img src="assets/img/theme-img3.jpg" alt=""></span>
        </div>
        <div class="theme-social-link">
            <h4>Thank you for sharing!</h4>
            <a href="#"><i class="zmdi zmdi-facebook"></i> Facebook</a>
            <a href="#"><i class="zmdi zmdi-twitter"></i> Twitter</a>
            <a href="#"><i class="zmdi zmdi-google-plus"></i> Google-plus</a>
        </div>
    </div>
    <!--  custom theme area end -->
    <div class="header-area">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 no-padding-left-right">
            <div class="logo">
                <a href="index.php">Fa21-BCS</a>
            </div>
        </div>
        <div class="col-md-4 search-area">
            <!--  <div class="header-search"> -->
            <span class="full-sc-icon btn-fullscreen"></span>
            <ul class="nav d-inl-bl">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown header-left-flag">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="flag1"></li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <!-- Single Flag -->
                                    <a href="#">
                                        <div class="single-flag">
                                            <img src="assets/img/flag1.png" alt="">
                                            <span>New-zealand</span>
                                        </div>
                                    </a>
                                </li>
                                <!--  End Single Flag -->
                                <li>
                                    <!-- Single Flag -->
                                    <a href="#">
                                        <div class="single-flag">
                                            <img src="assets/img/flag2.png" alt="">
                                            <span>New-zealand</span>
                                        </div>
                                    </a>
                                </li>
                                <!--  End Single Flag -->
                                <li>
                                    <!-- Single Flag -->
                                    <a href="#">
                                        <div class="single-flag">
                                            <img src="assets/img/flag3.png" alt="">
                                            <span>New-zealand</span>
                                        </div>
                                    </a>
                                </li>
                                <!--  End Single Flag -->
                                <li>
                                    <!-- Single Flag -->
                                    <a href="#">
                                        <div class="single-flag">
                                            <img src="assets/img/flag4.png" alt="">
                                            <span>New-zealand</span>
                                        </div>
                                    </a>
                                </li>
                                <!--  End Single Flag -->
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <span class="search-bar">
                <span class="search-icon"></span>
                <input type="search" placeholder="Search">
            </span>
        </div>
        <div class="col-md-6 text-right">
            <div class="header-right">
                <ul class="nav d-inl-bl">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown header-left-flag cta">
                        <a href="#" class="dropdown-toggle cta1" data-toggle="dropdown"><span>4</span></a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="flag1"></li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <img src="assets/img/bell-icon1.png" alt="">
                                                <div class="header-right-icon-text cta1">
                                                    <p>New user registerd</p>
                                                    <span>2 Minits ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <img src="assets/img/bell-icon2.png" alt="">
                                                <div class="header-right-icon-text cta1">
                                                    <p>Settings updated</p>
                                                    <span>5 Hours ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <img src="assets/img/bell-icon3.png" alt="">
                                                <div class="header-right-icon-text cta1">
                                                    <p>Event started</p>
                                                    <span>3 Days ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <img src="assets/img/bell-icon4.png" alt="">
                                                <div class="header-right-icon-text cta1">
                                                    <p>New twitter followers</p>
                                                    <span>6 Days ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag cta">
                                                <p>See all Notafaction</p>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav d-inl-bl">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown header-left-flag cta2">
                        <a href="#" class="dropdown-toggle cta2" data-toggle="dropdown"><span
                                class="animate_pulse">3</span></a>
                        <ul class="dropdown-menu wid_338 animated flipInX">
                            <li class="flag1"></li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <div class="msg_meta">
                                                    <span></span>
                                                    <img src="assets/img/message-img1.png" alt="">
                                                </div>
                                                <div class="header-right-icon-text cta2">
                                                    <p>Rasel ahmed <span>Jan ,01 ,2018</span></p>
                                                    <span>Thank you for your appericiate...</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <div class="msg_meta">
                                                    <span></span>
                                                    <img src="assets/img/message-img2.png" alt="">
                                                </div>
                                                <div class="header-right-icon-text cta2">
                                                    <p>Tamanna <span>Jan ,15 ,2018</span></p>
                                                    <span>Hello, I'm a beginner designer.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <div class="msg_meta">
                                                    <span></span>
                                                    <img src="assets/img/message-img3.png" alt="">
                                                </div>
                                                <div class="header-right-icon-text cta2">
                                                    <p>Shahin ahmed <span>Feb ,01 ,2018</span></p>
                                                    <span>Hi! Thanks for liking my work.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag cta">
                                                <p>See all Notafaction</p>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav d-inl-bl">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown header-left-flag cta3">
                        <a href="#" data-toggle="dropdown">
                            <img src="assets/img/user-img.png" alt="">
                            <span class="user-id">Ali Abbas</span>
                            <span class="arrow-down"></span>
                        </a>
                        <ul class="dropdown-menu cta4 animated flipInX">
                            <li class="flag1"></li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <span class="user-hv cta1"
                                                    style="background: url(assets/img/user.png);"></span>
                                                <div class="header-right-icon-text">
                                                    <p>Account</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <span class="user-hv cta1"
                                                    style="background: url(assets/img/mail.png);"></span>
                                                <div class="header-right-icon-text">
                                                    <p>Inbox</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag">
                                                <span class="user-hv cta1"
                                                    style="background: url(assets/img/Setting.png);"></span>
                                                <div class="header-right-icon-text">
                                                    <p>Settings</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                    <li>
                                        <!-- Single icon -->
                                        <a href="#">
                                            <div class="single-flag cta5">
                                                <span class="user-hv"
                                                    style="background: url(assets/img/power.png);"></span>
                                                <div class="header-right-icon-text">
                                                    <p>Logout</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--  End Single icon -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

    <!--  Nav menu area start -->
    <?php require "assets/components/naverbarLeft.php"?>
    <!-- /.dash-navbar-left -->
    <!--  button area start -->
    <div class="calendar-area mar_lft_282 all-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-title-area">
                        <h3>Calendar</h3>
                        <h4>Calendar</h4>
                    </div>
                </div>
            </div>
            <div class="wraper-bg-allpage">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Pricing_table Page Start-->
                        <div class="time_table_area">
                            <div id='calendar'></div>
                        </div>
                        <!-- Pricing_table Page End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  button area end -->
    <!-- footer area start -->
    <?php require "assets/components/footer.php"?>
    <!-- footer area end -->
    <!-- jquery.js -->
    <script src="assets/js/jquery.js"></script>
    <!-- jquery.popper.min.js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap.min.js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- inview.min.js -->
    <script src="assets/js/inview.js"></script>
    <!-- counter.min.js -->
    <script src="assets/js/counter.js"></script>
    <!-- === fullcalendarp=== -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="assets/js/theme-chooser.js"></script>
    <!--  touchswip js  -->
    <script src="assets/js/jquery.touchSwipe.min.js"></script>
    <!-- chart.min.js -->
    <script src="assets/js/chart.min.js"></script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>
    <!-- custom-theme.js -->
    <script src="assets/js/custom-theme.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            initThemeChooser({
                init: function (themeSystem) {
                    $('#calendar').fullCalendar({
                        themeSystem: themeSystem,
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay,listWeek'
                        },
                        defaultDate: '2018-02-12',
                        weekNumbers: false,
                        navLinks: true, // can click day/week names to navigate views
                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        events: [{
                            title: '8a Metting',
                            start: '2018-02-02'
                        },
                        {
                            title: '11a Coneference',
                            start: '2018-02-06'
                        },
                        {
                            id: 999,
                            title: '12a Happy hour',
                            start: '2018-02-08'
                        },
                        {
                            id: 999,
                            title: '12a Lunch',
                            start: '2018-02-12'
                        },
                        {
                            title: '9a Client meeting',
                            start: '2018-02-18'
                        },
                        {
                            title: '5a long event',
                            start: '2018-02-21'
                        },
                        {
                            title: '5a Meet with jon',
                            start: '2018-02-24'
                        }
                        ]
                    });
                },
                change: function (themeSystem) {
                    $('#calendar').fullCalendar('option', 'themeSystem', themeSystem);
                }
            });
        })
    </script>
</body>

</html>