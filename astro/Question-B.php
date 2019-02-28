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
function H1(){
$sql3 = "UPDATE users SET hint1a = 1 WHERE username = '$username'";
echo("<h1 color='white'>'$sql3'</h1>");
$retval3 = mysqli_query($link, $sql3);}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
@import url("Question-3.css");
</style>
</head>

<body background="home page back ground.jpg">
<div class="main">
<div class="navbar"><?php
Echo("<a href='$link2' class='QuesLink'>Question</a>");
?>
  <a href="LeaderBoard.php" class="LeadLink">Leaderboard</a>
  <img src="LOGO1.png" class="logo"/>
</div>
<div class="content">
<center>
<div class="w3-container form">
<center><div class="w3-cell w3-mobile Text">Bonus Question</div></center>
</div>
<div class="w3-container form">
<center><div class="Question Text w3-cell-middle w3-mobile"> Someone gave me this:<br>

“ 10000   00001   10010  10100"<br>

 " 10011  10000  01001  10100"<br>

"….Come to me…”<br>

Now I don’t work on puny and insignificant things but...I’m curious enough. <br>
Figure out where do I need to go and how much of my time will be wasted if I ever try to meet this anonymous messenger.<br>


</div></center>
</div>
<div class="w3-container form"><center>
	<div class="columnfull w3-cell w3-mobile Text"><textarea class="inputbox" rows="3" id="answer" cols="110" placeholder="Answer"></textarea></div>

	<div id="HintQ1modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Hint 1</h2>
    </div>
    <div class="modal-body">
      <p>Are you sure you want to take the hint.</p>
      <p>It costs 50% of the marks.</p>
    </div>
    <div class="modal-footer">
    <button id="TakeH1">TakeHint</button>
    </div>
  </div>

</div>
<div id="Hint1modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Hint 1</h2>
    </div>
    <div class="modal-body">
		<p>Fumble Jumble



</p>
    </div>
  </div>

</div>
	<div id="HintQ2modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Hint 2</h2>
    </div>
    <div class="modal-body">
      <p>Are you sure you want to take the hint.</p>
      <p>It costs 10% of the marks.</p>
    </div>
    <div class="modal-footer">
    <button id="TakeH2">TakeHint</button>
    </div>
  </div>

</div>
<div id="Hint2modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Hint 2</h2>
    </div>
    <div class="modal-body">
		<p>You don’t play video games, do you??
</p>
    </div>
  </div>

</div>
<div class="column Text">Marks-50</div>
<div class="column  w3-cell w3-mobile"><button id="H1" style="vertical-align:middle" class="button1"><span>Hint 1</span></button></div>
<div class="columnhidden  w3-cell w3-mobile">fdf</div>
	<div class="column  w3-cell w3-mobile"><button id="Submit" style="vertical-align:middle" class="button1" onClick="location.href='signin.html'"><span>Submit</span></button></div>
	</center>
</div>
<script>
// Get the modal
var HQ1modal = document.getElementById('HintQ1modal');
var H1modal = document.getElementById('Hint1modal');
var HQ2modal = document.getElementById('HintQ2modal');
var H2modal = document.getElementById('Hint2modal');
// Get the button that opens the modal
var H1 = document.getElementById("H1");
var T1 = document.getElementById("TakeH1");
var T2 = document.getElementById("TakeH2");
// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
var span3 = document.getElementsByClassName("close")[2];
var span4 = document.getElementsByClassName("close")[3];
// When the user clicks the button, open the modal 
H1.onclick = function() {
    HQ1modal.style.display = "block";
}
T1.onclick = function() {
    HQ1modal.style.display = "none";
	H1modal.style.display = "block";
	$.ajax({
                type: 'POST',
                url: 'H2Q5update.php'
	});
}

T2.onclick = function() {
    HQ2modal.style.display = "none";
	H2modal.style.display = "block";
	$.ajax({
                type: 'POST',
                url: 'H2Q5update.php'
	});
}
// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    HQ1modal.style.display = "none";
}
span2.onclick = function() {
    H1modal.style.display = "none";
}
span3.onclick = function() {
    HQ2modal.style.display = "none";
}
span4.onclick = function() {
    H2modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == HQ1modal) {
        HQ1modal.style.display = "none";
    }
	if (event.target == H1modal) {
        H1modal.style.display = "none";
    }
	if (event.target == HQ2modal) {
        HQ2modal.style.display = "none";
    }
	if (event.target == H2modal) {
        H2modal.style.display = "none";
    }
}
</script>
</div>
</body>
</html>

