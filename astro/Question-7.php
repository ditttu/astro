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
if($currentques!=7){
			header("location: LeaderBoard.php");
		}
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
if($date_array[mday]==11){
	$link4="";
	$questiontext="Bonus Question Expired";}
	elseif($date_array[hours]==23)
{
	$link4="Question-B.php";
	$questiontext="Bonus Question";
	
}elseif($date_array[hours]>23){
	$link4="";
	$questiontext="Bonus Question Expired";
}else{
	$link4="";
	$questiontext="Surprise at 4:30 a.m.!!";
}
$sql09 = "SELECT ques7_time FROM users WHERE username = '$username'";
$retval09 = mysqli_query($link, $sql09);
		$row09 = mysqli_fetch_assoc($retval09);
		$ques1_time = $row09["ques7_time"];
if($date_array[0]-strtotime($ques1_time)<5400)
{
	$link5="";
	$skiptext="Unavaiable";
}else
{
	$link5="Question-8.php";
	$skiptext="Skip";
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Q7ans = $_POST['Q7ans'];
		//echo("<H1 color='White'>adi</H1>");
	//$Q1ans="adi";
		$sql4 = "UPDATE users SET Q7ans='$Q7ans' WHERE username = '$username'";
        //$conn=mysql_select_db('Astro');
		$retval4 = mysqli_query($link, $sql4);     
        //header("location: Leaderboard.php");
                        
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
 <?php
Echo("<a href='$link4' class='QuesLink'>$questiontext</a>");
?>
  <a href="LeaderBoard.php" class="LeadLink">Leaderboard</a>
  <img src="LOGO1.png" class="logo"/>
</div>
<div class="content">
<center>
<div class="w3-container form">
<center><div class="w3-cell w3-mobile Text">Ques. 7</div></center>
</div>
<div class="w3-container form">
<center><div class="Question Text w3-cell-middle w3-mobile">Well here I am with a forgotten tale. A tale that takes us back to the time of the crusades. It talks of a warrior and a sacred clan. And as all the good old tales go..well you know.. they had to stop the crusades and save life.. from destruction ...blah blah blah..
But how can a war be stopped.. simple.. unite all the parties under the same flag. The funny thing was that it just required a grail. The great warrior went hunting after it, afterall he was the gem of the clan, the best they’ve got. Well, you now know more than enough and, the puzzle lay cracked already.<br>

Name the crown that the gem adores??<br>

</div></center>
</div>
<div class="w3-container form"><center>
	

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
		<p>Beware, the tale is as imaginative as it appears. History won’t help much. Virtual reality might help.


</p><div class="column  w3-cell w3-mobile"><button id="H2" style="vertical-align:middle" class="button1"><span>Hint 2</span></button></div>
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
      <p>It costs 75% of the marks.</p>
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
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<div class="columnfull w3-cell w3-mobile Text"><textarea class="inputbox" rows="3" name='Q7ans' id="answer" cols="110" placeholder="Answer"></textarea></div>
<div class="column Text">Marks-60</div>
<div class="column  w3-cell w3-mobile"><button type="submit" id="Submit" style="vertical-align:middle" class="button1" ><span>Submit</span></button></div></form>
<div class="column  w3-cell w3-mobile"><button id="H1" style="vertical-align:middle" class="button1"><span>Hint 1</span></button></div>
	
	
</div>
	<div class="columnhidden">f</div>
	<div class="columnhidden">j</div>
	<div class="columnhidden">k</div>
	<div class="column  w3-cell w3-mobile"><button style="vertical-align:middle" id="skip" class="button1"><span><?php
Echo($skiptext);
?></span></button></div>
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
var H2 = document.getElementById("H2");
var T2 = document.getElementById("TakeH2");
	var skip = document.getElementById("skip");
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
                url: 'H1Q7update.php'
	});
}
H2.onclick = function() {
    HQ2modal.style.display = "block";
}
T2.onclick = function() {
    HQ2modal.style.display = "none";
	H2modal.style.display = "block";
	$.ajax({
                type: 'POST',
                url: 'H2Q7update.php'
	});
}
skip.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'Q7skip.php'
	});
	window.location = "<?php echo($link5);?>";
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

