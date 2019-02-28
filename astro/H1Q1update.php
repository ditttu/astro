<?php
require('/vendor/autoload.php');
$username = "";
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: signin.php");
  exit;
}
$username = $_SESSION["username"];
$sql3 = "UPDATE users SET hint1a = 1 WHERE username = '$username'";
$retval3 = mysqli_query($link, $sql3);
//header("location: signin.php");
?>