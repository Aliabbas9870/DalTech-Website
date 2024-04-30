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
