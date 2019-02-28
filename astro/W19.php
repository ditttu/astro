<?php
require('/vendor/autoload.php');
$ID = 20;
$sql15="SELECT currentques FROM users WHERE ID = '$ID'";
        //$conn=mysql_select_db('Astro');
		$retval = mysqli_query($link, $sql15);
		$row = mysqli_fetch_assoc($retval);
if($row['currentques']==1)
{
	$sql3 = "UPDATE users SET Q1ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==2)
{
	$sql3 = "UPDATE users SET Q2ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==3)
{
	$sql3 = "UPDATE users SET Q3ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==4)
{
	$sql3 = "UPDATE users SET Q4ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==5)
{
	$sql3 = "UPDATE users SET Q5ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==6)
{
	$sql3 = "UPDATE users SET Q6ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==7)
{
	$sql3 = "UPDATE users SET Q7ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==8)
{
	$sql3 = "UPDATE users SET Q8ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==9)
{
	$sql3 = "UPDATE users SET Q9ans = '' WHERE ID = '$ID'";
}elseif($row['currentques']==10)
{
	$sql3 = "UPDATE users SET Q10ans = '' WHERE ID = '$ID'";
}

$retval3 = mysqli_query($link, $sql3);
//header("location: signin.php");
?>