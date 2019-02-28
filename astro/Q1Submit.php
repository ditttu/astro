<?php
require('/vendor/autoload.php');
$username = "";
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: signin.php");
  exit;
}
$answer = $_POST['answer'];
$username = $_SESSION["username"];
$sql4 = "UPDATE users SET Q1ans = '$answer' WHERE username = '$username'";
$retval4 = mysqli_query($link, $sql4);
//header("location: signin.php");
?>