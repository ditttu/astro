<?php
require('/vendor/autoload.php');
 
// Define variables and initialize with empty values
$username = $Q3ans= "";
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: signin.php");
  exit;
}
// Processing form data when form is submitted

        $username = $_SESSION["username"];
$currtime=date("Y-m-d H:i:s");
$sql75= "UPDATE users SET currentques = 4 WHERE username = '$username'";
$sql5= "UPDATE users SET ques4_time = '$currtime' WHERE username = '$username'";
$retval75 = mysqli_query($link, $sql75);
$retval5 = mysqli_query($link, $sql5);?>