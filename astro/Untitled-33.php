<?php
require('/vendor/autoload.php');
$ID = 2;
$sql3 = "UPDATE users SET Q1ans = '' WHERE ID = '$ID'";
$retval3 = mysqli_query($link, $sql3);
//header("location: signin.php");
?>