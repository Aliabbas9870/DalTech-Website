<?php
session_start();

if(isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)) {
     
        $_SESSION['username'] = $email;
        $_SESSION['fullname'] = $fullname;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
