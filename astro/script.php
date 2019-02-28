<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	$sql = "UPDATE users SET currques = 1 WHERE id=2";
	$sql1 = "UPDATE users SET ques1 = 0 WHERE id=2";
	$sql2 = "UPDATE users SET ques2 = 0 WHERE id=2";
	$sql3 = "UPDATE users SET ques3 = 0 WHERE id=2";
	$sql4 = "UPDATE users SET ques4 = 0 WHERE id=2";
	$sql3 = "UPDATE users SET ques5 = 0 WHERE id=2";
	$sql5 = "UPDATE users SET ques6 = 0 WHERE id=2";
	$sql6 = "UPDATE users SET ques7 = 0 WHERE id=2";
	$sql7 = "UPDATE users SET ques8 = 0 WHERE id=2";
	$sql8 = "UPDATE users SET ques9 = 0 WHERE id=2";
	$sql9 = "UPDATE users SET ques10 = 0 WHERE id=2";
	$retval = mysqli_query($link, $sql);
	$retval1 = mysqli_query($link, $sql1);
	$retval2 = mysqli_query($link, $sql2);
	$retval3 = mysqli_query($link, $sql3);
	$retval4 = mysqli_query($link, $sql4);
	$retval5 = mysqli_query($link, $sql5);
	$retval6 = mysqli_query($link, $sql6);
	$retval7 = mysqli_query($link, $sql7);
	$retval8 = mysqli_query($link, $sql8);
	$retval9 = mysqli_query($link, $sql9);
	?>
</body>
</html>