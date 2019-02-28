<?php
require('/vendor/autoload.php');
 
// Define variables and initialize with empty values
$username = $Q4ans= "";
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: signin.php");
  exit;
}
// Processing form data when form is submitted

        $username = $_SESSION["username"];
$currtime=date("Y-m-d H:i:s");
$sql5= "UPDATE users SET ques1_time = '$currtime' WHERE username = '$username'";

$retval5 = mysqli_query($link, $sql5);?>