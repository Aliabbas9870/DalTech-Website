<!-- <?php
// include("config.php");

// if(isset($_POST["submit"])) {
    // Sanitize user inputs
    // $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
    // $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    // $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    // Fix SQL query syntax errors (remove quotes around table name and fix values)
    // $sql = "INSERT INTO techcontact (FirstName, LastName, EmailAddress, Phone, Message)
            // VALUES ('$Fname', '$Lname', '$email', '$phone', '$message')";

    // // Perform the query
    // if(mysqli_query($conn, $sql)) {
    //     echo "Added data";
    // } else {
    //     die(mysqli_error($conn)); // Display error message if query fails
//     }
// } 
// ?> -->

<?php
// Include the database configuration file
include("config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and escape user inputs to prevent SQL injection
    $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO techcontact (FirstName, LastName, EmailAddress, Phone, Message) 
            VALUES ('$Fname', '$Lname', '$email', '$phone', '$message')";

    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully
    
    } else {
        // Error in inserting data
        echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
    }
}
?>


<section class="contact-section fix section-padding">
    <div class="container">
        <div class="contact-wrapper">
            <div class="shape-image">
                <img src="assets/img/contact/bg-shape.png" alt="shape-img">
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-image bg-cover" style="background-image: url('assets/img/contact/01.jpg');">
                        <div class="shape-image-2">
                            <img src="assets/img/contact/shape-img.png" alt="shape-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="contact-area">
                        <div class="section-title">
                            <span class="wow fadeInUp">get in touch immediate</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Let’s Work Together</h2>
                        </div>
                        <div class="contact-form-items mt-5 mt-md-0">
                            <form  method="POST" >
                                <div class="row g-3">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="Fname" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="Lname" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="email" name="email"  placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="phone"  placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <textarea name="message" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                        <button type="submit" class="theme-btn">
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
