<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "admindelteck");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $FullName = mysqli_real_escape_string($conn, $_POST['fullname']);
    $Service = mysqli_real_escape_string($conn, $_POST['service']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $Contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $Message = mysqli_real_escape_string($conn, $_POST['message']);

    // Handle file upload
    $img_dir = 'uploads/';
    $img = ''; // Initialize variable to store file path
    if(isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        if (!file_exists($img_dir)) {
            // Create the directory if it doesn't exist
            mkdir($img_dir, 0777, true);
        }

        $img_name = $_FILES['img']['name']; // Original name of the uploaded file
        $img_tmp = $_FILES['img']['tmp_name']; // Temporary name of the uploaded file
        $img = $img_dir . $img_name; // Final path to store in database
        
        // Move uploaded file to the destination directory
        if(move_uploaded_file($img_tmp, $img_dir . $img_name)) {
            // File uploaded successfully
        } else {
            // Error handling for failed file upload
            echo "Error uploading file.";
        }
    }

    // Generate other required data
    $TokenKey = bin2hex(random_bytes(16)); // Improved token generation method
    $MySqlCommand = "SELECT MAX(Id) FROM contactus";
    $Result = mysqli_query($conn, $MySqlCommand);
    $MaxID = mysqli_fetch_array($Result);
    $UserID = $MaxID[0];
    $UserID = $UserID + 1;

    $TodayDate = date("Ymd");
    $Reference = $TodayDate . "_" . str_pad($UserID, 8, "0", STR_PAD_LEFT);
    $Status = 0;
    $IP = $_SERVER['REMOTE_ADDR'];

    // Insert data into database
    $Query = "INSERT INTO register(Id, FullName, service, Email, password, message, img, refrence, status, ipaddress, token) 
    VALUES($UserID, '$FullName', '$Service', '$Email', '$Password', '$Message', '$img', '$Reference', $Status, '$IP', '$TokenKey')";
    $Result = mysqli_query($conn, $Query);

    if ($Result) {
        echo "<script>alert('Thanks for Contacting. We\'ll respond to you soon.'); window.location.href = 'index.php';</script>";
        exit; // Added to prevent further execution
    } else {
        echo "<script>alert('Exception Found. Please contact us using our Email.'); window.location.href = 'contact-add.php?error';</script>";
        exit; // Added to prevent further execution
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICON -->
    <link rel="icon" href="assets/img/favicon.png">
    <!--   Title Page -->
    <title>Form-validation</title>
    <!-- bootstrap.min.css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- material fonts.css -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- parfect scrollbar.css -->
    <link href="assets/css/perfect-scrollbar.min.css" rel="stylesheet">
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
    <!--  Header area end -->
    <!--  Nav menu area start -->
    <?php require "assets/components/naverbarLeft.php"?>
    <!-- /.dash-navbar-left -->
    <!--  panel area start -->
    <div class="form-validation mar_lft_282 all-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-title-area">
                        <h3>Forms</h3>
                        <h4>Forms / Validations</h4>
                    </div>
                </div>
            </div>
            <div class="wraper-bg-allpage">
                <div class="row">
                    <div class="col-lg-6 cta_4">
                        <div class="form-basic _cfs form-shadow">
                            <h3 class="form-title">Register Form</h3>
                            <form action="register.php">
                                <p>EMAIL ADDRESS <span class="star_">*</span></p>
                                <input type="email" name="email">
                                <p>PASSWORD <span class="star_">*</span></p>
                                <input type="password" name="password">
                                <p>CONFIRM PASSWORD <span class="star_">*</span></p>
                                <input type="password" name="pssword-confirm">
                                <input type="submit" value="Register">
                                <p class="vali_meta">
                                    <input type="checkbox" id="test1"/>
                                    <label for="test1">Subscribe To Newsletter</label>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-basic _cfs cta_5 form-shadow">
                            <h3 class="form-title">Login Form</h3>
                            <form action="register.php">
                                <p>EMAIL ADDRESS <span class="star_">*</span></p>
                                <input type="email" name="email">
                                <p>PASSWORD <span class="star_">*</span></p>
                                <input type="password" name="password">
                                <p class="vali_meta ct_2">
                                    <input type="checkbox" id="test1s"/>
                                    <label for="test1s">Remember me</label>
                                </p>
                                <input type="submit" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="form-element-center ctah_3  form-shadow">
                    <h3 class="form-title">Validation type</h3>
                    <form action="register.php">
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Required</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Required filed">
                                <span class="btn-nice-select cta">
                                    <select name="selct2" id="selct2">
                                        <option value="#">Please choose</option>
                                        <option value="#">Usa</option>
                                        <option value="#">canada</option>
                                        <option value="#">Uk</option>
                                    </select>
                                </span>
                                <p class="vali_meta">
                                    <input type="checkbox" id="testf"/>
                                    <label for="testf">Subscribe To Newsletter</label>
                                </p>
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">E-Mail</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="email" placeholder="enter a valid e-mail">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Number</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Enter only Number">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">URL</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="URL">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Equal To</p>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" placeholder="Re-type password" name="password">
                                    </div>
                                </div>
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-element-center ctah_3  form-shadow">
                    <h3 class="form-title">Range Validation</h3>
                    <form action="register.php">
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Min Length</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="min 6 chars.">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Max Length</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="email" placeholder="mix 6 chars.">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Range Length</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="text between 5-10 chars length">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Regular Exp</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Hex. color">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Digits</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Enter only digits">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Alphanumeric</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Enter Alphanumeric value">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-3 offset-lg-1">
                                <p class="form-element-left-title">Textarea</p>
                            </div>
                            <div class="col-lg-8 let_1">
                                <textarea></textarea>
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
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
    <!-- jvectormap -->
    <script src="assets/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!--  touchswip js  -->
    <script src="assets/js/jquery.touchSwipe.min.js"></script>
    <!--  perfect scrollbar js  -->
    <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--  nice select js  -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>
    <!-- custom-theme.js -->
    <script src="assets/js/custom-theme.js"></script>
</body>
</html>