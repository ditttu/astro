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
$date_array=getdate();
if($date_array[mday]<11)
{
	$link4="";
	$questiontext="Surprise at 4 a.m.!!";
}
elseif($date_array[hours]==4)
{
	$link4="Question-B.php";
	$questiontext="Bonus Question";
	
}elseif($date_array[hours]>4){
	$link4="";
	$questiontext="Bonus Question Expired";
}else{
	$link4="";
	$questiontext="Surprise at 4 a.m.!!";
}
		
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
@import url("LeaderBoard.css");
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body background="home page back ground.jpg">
<div class="main">
<div class="navbar">
  <?php
echo("<a href='$link2' class='QuesLink'>Question</a>");
?>
<?php
echo("<a href='$link4' class='QuesLink'>$questiontext</a>");
?>

 
  <a href="LeaderBoard.php" class="LeadLink">Leaderboard</a>
  <img src="LOGO1.png" class="logo"/>
</div>


<div class="content Text">
<center>
<?php
$sql45 = "SELECT username,ques1,ques2,ques3,ques4,ques5,ques6,ques7,ques8,ques9,ques10,QuesB,hint1a,hint2a,hint3a,hint4a,hint5a,hint6a,hint7a,hint8a,hint9a,hint10a,hint1b,hint2b,hint3b,hint4b,hint5b,hint6b,hint7b,hint8b,hint9b,hint10b FROM users";
$result = mysqli_query($link, $sql45);
	$row = mysqli_fetch_assoc($result);
    while($row = mysqli_fetch_assoc($result)) {
	$score1=$row['ques1'];
	if(!$score1){
		$s1=60*$row['ques1']-30*$row['hint1a']-15*$row['hint1b'];
	}else{
		$s1=60*$row['ques1'];
	}
	$score2=$row['ques2'];
	if(!$score2){
		$s2=60*$row['ques2']-30*$row['hint2a']-15*$row['hint2b'];
	}else{
		$s2=60*$row['ques2'];
	}
	$score3=$row['ques3'];
	if(!$score3){
		$s3=60*$row['ques3']-30*$row['hint3a']-15*$row['hint3b'];
	}else{
		$s3=60*$row['ques3'];
	}
	$score4=$row['ques4'];
	if(!$score4){
		$s4=80*$row['ques4']-40*$row['hint4a']-20*$row['hint4b'];
	}else{
		$s4=80*$row['ques4'];
	}
	$score5=$row['ques5'];
	if(!$score5){
		$s5=40*$row['ques5']-20*$row['hint5a'];
	}else{
		$s5=40*$row['ques5'];
	}
	$score6=$row['ques6'];
	if(!$score6){
		$s6=60*$row['ques6']-30*$row['hint6a']-15*$row['hint6b'];
	}else{
		$s6=60*$row['ques6'];
	}
	$score7=$row['ques7'];
	if(!$score7){
		$s7=60*$row['ques7']-30*$row['hint7a']-15*$row['hint7b'];
	}else{
		$s7=60*$row['ques7'];
	}
	$score8=$row['ques8'];
	if(!$score8){
		$s8=40*$row['ques8']-20*$row['hint8a']-10*$row['hint8b'];
	}else{
		$s8=40*$row['ques8'];
	}
	$score9=$row['ques9'];
	if(!$score9){
		$s9=60*$row['ques9']-30*$row['hint9a']-15*$row['hint9b'];
	}else{
		$s9=60*$row['ques9'];
	}
	$score10=$row['ques10'];
	if(!$score10){
		$s10=60*$row['ques10']-30*$row['hint10a']-15*$row['hint10b'];
	}else{
		$s10=60*$row['ques10'];
	}
		$scoreb=$row['QuesB'];
	if(!$scoreb){
		$sb=50*$row['QuesB']-25*$row['hint5b'];
	}else{
		$sb=60*$row['QuesB'];
	}	$score=$s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10+$sb;
        echo($row['username']);
		echo(" - ");
		echo($score);
		echo("<br>");
    }
?> 
</center>
</div>
</div>
</body>
</html>
