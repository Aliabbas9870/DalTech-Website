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
    $Query = "INSERT INTO contactus(Id, FullName, service, Email, password, message, img, refrence, status, ipaddress, token) 
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
    <title>Form-Layout</title>
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
    <div class="form-area mar_lft_282 all-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-title-area">
                        <h3>Forms</h3>
                        <h4>Forms / Layout</h4>
                    </div>
                </div>
            </div>
            <div class="wraper-bg-allpage">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-basic _cfs form-shadow">
                            <h3 class="form-title">Default Form Layout</h3>
                            <form action="register.php">
                                <p>Full name</p>
                                <input type="text" name="name" placeholder="Full name">
                                <p class="form-meta_1">Please enter your full name</p>
                                <p>Email address</p>
                                <input type="email" placeholder="Email address">
                                <p class="form-meta_1">We'll never share your email with anyone else</p>
                                <p>Password</p>
                                <input type="password" name="pssword" placeholder="Password">
                                <p class="form-meta_1">Your password must be 8-10 characteras</p>
                                <p>
                                    <input type="checkbox" id="test1" />
                                    <label for="test1">Subscribe To Newsletter</label>
                                </p>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-basic _cfs cta1 form-shadow">
                            <h3 class="form-title">Horizontal Form Layout</h3>
                            <form action="register.php">
                                <span class="form_4">Full name</span>
                                <input type="text" name="name" placeholder="Full name">
                                <p class="form-meta_1">Please enter your full name</p>
                                <span class="form_4">Email</span>
                                <input type="email" placeholder="Email">
                                <p class="form-meta_1">We'll never share your email with anyone else</p>
                                <span class="form_4">Password</span>
                                <input type="password" placeholder="Password">
                                <p class="form-meta_1">Your password must be 8-10 characters</p>
                                <span>
                                    <input type="checkbox" id="test2" />
                                    <label for="test2">Remember me</label>
                                  </span>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="form-element-center  form-shadow">
                    <h3 class="form-title">Address</h3>
                    <form action="register.php">
                        <div class="row margin-bottom30">
                            <div class="col-lg-12">
                                <p>Street</p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="row margin-bottom30">
                            <div class="col-lg-6">
                                <p>City</p>
                                <input type="text">
                            </div>
                            <div class="col-lg-6">
                                <p>State</p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Post Code</p>
                                <input type="text">
                            </div>
                            <div class="col-lg-6">
                                <p>Country</p>
                                <span class="btn-nice-select cta">
                                    <select name="selct2" id="selct2">
                                        <option value="#">Select your country</option>
                                        <option value="#">Usa</option>
                                        <option value="#">canada</option>
                                        <option value="#">Uk</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-element-center _c1  form-shadow">
                    <h3 class="form-title">Person info</h3>
                    <form action="register.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>first name</p>
                                <input type="text" name="name" placeholder="Name here">
                            </div>
                            <div class="col-lg-6">
                                <p>last name</p>
                                <input type="text" name="name" placeholder="Last here">
                            </div>
                            <div class="col-lg-6">
                                <p>Gender</p>
                                <span class="btn-nice-select cta">
                                    <select name="sd2" id="sd2">
                                        <option value="#">Male</option>
                                        <option value="#">Female</option>
                                    </select>
                                </span>
                            </div>
                            <div class="col-lg-6">
                                <p>Date of Birth</p>
                                <input type="text" name="name" placeholder="dd - mm - yyyy">
                            </div>
                            <div class="col-lg-6">
                                <p>Category</p>
                                <span class="btn-nice-select cta">
                                    <select name="d2" id="d2">
                                        <option value="#">Category 1</option>
                                        <option value="#">Category 2</option>
                                        <option value="#">Category 3</option>
                                        <option value="#">Category 4</option>
                                    </select>
                                </span>
                            </div>
                            <div class="col-lg-6">
                               <div class="form-center_me">
                                    <p>Membership</p>
                                    <div class="radio-btn ctas1">
                                        <input id="radio-2s" name="radio" type="radio" checked>
                                        <label for="radio-2s" class="radio-label">Professional</label>
                                        <input id="radio-3s" name="radio" type="radio" checked>
                                        <label for="radio-3s" class="radio-label">Free</label>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-basic cta1 form-shadow">
                            <h3 class="form-title">Customer Info:</h3>
                            <form action="register.php">
                                <span class="form_4">Full name</span>
                                <input type="text" name="name" placeholder="Full name">
                                <p class="form-meta_1">Please enter your full name</p>
                                <span class="form_4">Email</span>
                                <input type="email" placeholder="Email">
                                <p class="form-meta_1">We'll never share your email anyone else</p>
                                <span class="form_4">Communication</span>
                                <div class="form-check-box">
                                    <input type="checkbox" id="box-1">
                                    <label for="box-1">Option one</label>
                                    <input type="checkbox" id="box-2">
                                    <label for="box-2">Option two </label>
                                    <input type="checkbox" id="box-3">
                                    <label for="box-3">Option three</label>
                                </div>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-basic cta1 form-shadow">
                            <h3 class="form-title">Payment Info:</h3>
                            <form action="register.php">
                                <span class="form_4">Amount:</span>
                                <input type="text" name="name" placeholder="$3600">
                                <p class="form-meta_1">Please enter payment amount</p>
                                <span class="form_4 _d">Payment Method:</span>
                                <div class="radio-btn ctas1">
                                        <input id="radio-2ss" name="radio" type="radio">
                                        <label for="radio-2ss" class="radio-label">Credit Card</label>
                                        <input id="radio-3ss" name="radio" type="radio" checked>
                                        <label for="radio-3ss" class="radio-label">Bitcoin</label>
                                        <input id="radio-4ss" name="radio" type="radio">
                                        <label for="radio-4ss" class="radio-label">Cash</label>
                                        <!-- <p class="form-meta_1">Please select payment method</p> -->
                                    </div>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
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