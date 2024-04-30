<?php
session_start(); 
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {   
    header("Location: login.php");
    exit();
}
?>
<?php include "helper/database-helper.php"?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name='daltech';
$conn = mysqli_connect($servername, $username, $password,$db_name);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
 include'header.php'
?>