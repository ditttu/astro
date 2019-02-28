<?php
require('/vendor/autoload.php');
 
// Define variables and initialize with empty values
$username = "";
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: signin.php");
  exit;
}
// Processing form data when form is submitted

        $username = $_SESSION["username"];
		$sql = "SELECT currentques FROM users WHERE username = '$username'";
        //$conn=mysql_select_db('Astro');
		$retval = mysqli_query($link, $sql);
		$row = mysqli_fetch_assoc($retval);
		$currentques = $row["currentques"];
		//echo($row["password"]);
		//if($row["password"]!=NULL){
		//echo("abc");}
		//echo($sql);
        //echo($username);
		//echo($password);
		if($row["currentques"]==NULL){
			$currentques=1;
			$sql2 = "UPDATE users SET currentques = 1 WHERE username = '$username'";
        //$conn=mysql_select_db('Astro');
		$retval2 = mysqli_query($link, $sql2);
		}
		if($currentques == 1)
		{
			$link2 = "Question-1.php";
		}elseif($currentques == 2 )
			{
			$link2 = "Question-2.php";
		}
		elseif($currentques == 3){
			$link2 = "Question-3.php";
		}elseif($currentques == 4){
			$link2 = "Question-4.php";
		}elseif($currentques == 5){
			$link2 = "Question-5.php";
		}elseif($currentques == 6){
			$link2 = "Question-6.php";
		}elseif($currentques == 7){
			$link2 = "Question-7.php";
		}elseif($currentques == 8){
			$link2 = "Question-8.php";
		}elseif($currentques == 9){
			$link2 = "Question-9.php";
		}elseif(currentques == 10){
			$link2 = "Question-10.php";
		}else{
			echo("ERROR");
		}
		
?>






<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
@import url("Questions.css");
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body background="home page back ground.jpg">
<div class="main">
<div class="navbar">
  <?php
Echo("<a href='$link2' class='QuesLink'>Question</a>");
?>
  <a href="LeaderBoard.html" class="LeadLink">Leaderboard</a>
  <img src="LOGO1.png" class="logo"/>
</div>


<div class="content">
<center>
<div class="w3-container form">
	<div class="column  w3-cell w3-mobile"><button id="Q1" style="vertical-align:middle" class="button1" onClick="location.href='Question-1.html'"><span>Ques. 1</span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q2" style="vertical-align:middle" class="button1" onClick="location.href='Question-2.html'"><span>Ques. 2</span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q3" style="vertical-align:middle" class="button1"  onClick="location.href='Question-3.html'"><span>Ques. 3 </span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q4" style="vertical-align:middle" class="button1" onClick="location.href='Question-4.html'"><span>Ques. 4</span></button></div>
</div>
<div class="w3-container form">
	<div class="column  w3-cell w3-mobile"><button id="Q5" style="vertical-align:middle" class="button1" onClick="location.href='Question-5.html'"><span>Ques. 5</span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q6" style="vertical-align:middle" class="button1" onClick="location.href='Question-6.html'"><span>Ques. 6</span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q7" style="vertical-align:middle" class="button1"  onClick="location.href='Question-7.html'"><span>Ques. 7 </span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q8" style="vertical-align:middle" class="button1" onClick="location.href='Question-8.html'"><span>Ques. 8</span></button></div>
</div><div class="w3-container form">
	<div class="column  w3-cell w3-mobile"><button id="Q9" style="vertical-align:middle" class="button1" onClick="location.href='Question-9.html'"><span>Ques. 9</span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q10" style="vertical-align:middle" class="button1" onClick="location.href='Question-10.html'"><span>Ques. 10</span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q11" style="vertical-align:middle" class="button1"  onClick="location.href='Question-11.html'"><span>Ques. 11 </span></button></div>
	<div class="column  w3-cell w3-mobile"><button id="Q12" style="vertical-align:middle" class="button1" onClick="location.href='Question-12.html'"><span>Ques. 12</span></button></div>
</div>
</center>
</div>
</div>
</body>
</html>
