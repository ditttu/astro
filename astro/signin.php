<?php
require('/vendor/autoload.php');
 
// Define variables and initialize with empty values
$username = $password = $error ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST['password'];
		$sql = "SELECT password FROM users WHERE username = '$username'";
        //$conn=mysql_select_db('Astro');
		$retval = mysqli_query($link, $sql);
		$row = mysqli_fetch_assoc($retval);
		//echo($row["password"]);
		//if($row["password"]!=NULL){
		//echo("abc");}
		//echo($sql);
        //echo($username);
		//echo($password);
		if($row["password"]==NULL){
			$error="No user found";
		}elseif($password!=$row["password"]){
			$error= "Wrong Password";
		}else{
			$sql20 = "SELECT ques1_time FROM users WHERE username = '$username'";
			$retval17 = mysqli_query($link, $sql20);
		$row17 = mysqli_fetch_assoc($retval17);
			if($row17['ques1_time']==NULL){
				$currtime=date("Y-m-d H:i:s");
	$sql5= "UPDATE users SET ques1_time = '$currtime' WHERE username = '$username'";
			$retval15 = mysqli_query($link, $sql5);
			}
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location: Leaderboard.php");
                        
		}
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
@import url("signin.css");
</style>
<title>Untitled Document</title>
</head>
<body background="home page back ground.jpg">
<div class="main">
<img src="LOGO1.png" class="logo"/>
<center><p class="Texthead">Sign-in<?php if($error!=NULL){
	echo("<br>");
	echo($error);}?></p></center>
<div class="content"><br>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<center>
<div class="w3-container Text">
 	<div class="columnhidden w3-cell w3-mobile">ad</div>
	<div class="column w3-cell w3-mobile">Username</div>
	<div class="column w3-cell w3-mobile"><input type="text" id="username" name="username" placeholder="Username" class="inputbox" value="<?php echo $username; ?>"></div>
	<div class="columnhidden w3-cell w3-mobile">ad</div>
	</div>
</center>
<center>
<div class="w3-container Text">
 	<div class="columnhidden w3-cell w3-mobile">ad</div>
	<div class="column w3-cell w3-mobile">Password</div>
	<div class="column w3-cell w3-mobile"><input type="password" id="password" name="password" placeholder="Password" class="inputbox" value="<?php echo $password; ?>"></div>
	<div class="columnhidden w3-cell w3-mobile">ad</div>
	</div>
</center>
<center>
<div class="w3-container form">
	<div class="columnhidden  w3-cell w3-mobile">ad</div>
	<div class="columnhidden  w3-cell w3-mobile">a</div>
	<div class="column  w3-cell w3-mobile"><button id="signin" style="vertical-align:middle" class="button1" type="submit"><span>Sign in </span></button></div>
	<div class="columnhidden  w3-cell w3-mobile">ad</div>
</div>
</center>
</form>
</div>
</div>
</body>
</html>
