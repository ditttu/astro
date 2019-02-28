<?php
require('/vendor/autoload.php');
$ID = 18;
$sql15="SELECT currentques FROM users WHERE ID = '$ID'";
        //$conn=mysql_select_db('Astro');
		$retval = mysqli_query($link, $sql15);
		$row = mysqli_fetch_assoc($retval);
		$currtime=date("Y-m-d H:i:s");
if($row['currentques']==1)
{
	$sql3 = "UPDATE users SET ques1 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques2_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==2)
{
	$sql3 = "UPDATE users SET ques2 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques3_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==3)
{
	$sql3 = "UPDATE users SET ques3 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques4_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==4)
{
	$sql3 = "UPDATE users SET ques4 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques5_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==5)
{
	$sql3 = "UPDATE users SET ques5 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques6_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==6)
{
	$sql3 = "UPDATE users SET ques6 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques7_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==7)
{
	$sql3 = "UPDATE users SET ques7 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques8_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==8)
{
	$sql3 = "UPDATE users SET ques8 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques9_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==9)
{
	$sql3 = "UPDATE users SET ques9 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques10_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}elseif($row['currentques']==10)
{
	$sql3 = "UPDATE users SET ques10 = 1 WHERE ID = '$ID'";
	$sql5= "UPDATE users SET ques1_time = '$currtime' WHERE ID = '$ID'";
	$sql4 = "UPDATE users SET currentques = currentques + 1 WHERE ID = '$ID'";
}

$retval3 = mysqli_query($link, $sql3);
$retval4 = mysqli_query($link, $sql4);
$retval5 = mysqli_query($link, $sql5);


//header("location: signin.php");
?>