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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="container">
            <h2>Contact Form</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="service">Service</label>
                    <input type="text" class="form-control" id="service" name="service" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact">
                </div>
                <div class="form-group">
                    <label for="img">Image</label>
                    <input type="file" class="form-control-file" id="img" name="img">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>
