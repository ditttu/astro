<?php
require('/vendor/autoload.php');
$sql = "SELECT currentques,ques1,ques2,ques3,ques4,ques5,ques6,ques7,ques8,ques9,ques10,Q1ans,Q2ans,Q3ans,Q4ans,Q5ans,Q6ans,Q7ans,Q8ans,Q9ans,Q10ans FROM users";
$username = "";
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: signin.php");
  exit;
}
// Processing form data when form is submitted

        $username = $_SESSION["username"];
if($username!="aditya"){
	header("location: LeaderBoard.php");
}
        //$conn=mysql_select_db('Astro');
		$retval = mysqli_query($link, $sql);
		$row1 = mysqli_fetch_assoc($retval);
		$row2 = mysqli_fetch_assoc($retval);
		$row3 = mysqli_fetch_assoc($retval);
		$row4 = mysqli_fetch_assoc($retval);
		$row5 = mysqli_fetch_assoc($retval);
		$row6 = mysqli_fetch_assoc($retval);
		$row7 = mysqli_fetch_assoc($retval);
		$row8 = mysqli_fetch_assoc($retval);
		$row9 = mysqli_fetch_assoc($retval);
		$row10 = mysqli_fetch_assoc($retval);
		$row11 = mysqli_fetch_assoc($retval);
		$row12 = mysqli_fetch_assoc($retval);
		$row13 = mysqli_fetch_assoc($retval);
		$row14 = mysqli_fetch_assoc($retval);
		$row15 = mysqli_fetch_assoc($retval);
		$row16 = mysqli_fetch_assoc($retval);
		$row17 = mysqli_fetch_assoc($retval);
		$row18 = mysqli_fetch_assoc($retval);
		$row19 = mysqli_fetch_assoc($retval);
		$row20 = mysqli_fetch_assoc($retval);
		$row21 = mysqli_fetch_assoc($retval);
		$row22 = mysqli_fetch_assoc($retval);
		$row23 = mysqli_fetch_assoc($retval);
		$row24 = mysqli_fetch_assoc($retval);
		$row25 = mysqli_fetch_assoc($retval);
		$row26 = mysqli_fetch_assoc($retval);
		$row27 = mysqli_fetch_assoc($retval);
		$row28 = mysqli_fetch_assoc($retval);
		$row29 = mysqli_fetch_assoc($retval);
		$row30 = mysqli_fetch_assoc($retval);
		$row31 = mysqli_fetch_assoc($retval);
		$row32 = mysqli_fetch_assoc($retval);
		$row33 = mysqli_fetch_assoc($retval);
		$row34 = mysqli_fetch_assoc($retval);
		$row35 = mysqli_fetch_assoc($retval);
		$row36 = mysqli_fetch_assoc($retval);
		$row37 = mysqli_fetch_assoc($retval);
		$row38 = mysqli_fetch_assoc($retval);
?>


<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<title>backend</title></head>
<body>
<table width="100%">
<tr>
<td>Team1</td>
<td>Team2</td>
<td>Team3</td>
<td>Team4</td>
</tr>
<tr>
<td><div id="Team1Q"><?php echo($row2['currentques']);?></div></td>
<td><div id="Team2Q"><?php echo($row3['currentques']); ?></div></td>
<td><div id="Team3Q"><?php echo($row4['currentques']); ?></div></td>
<td><div id="Team4Q"><?php echo($row5['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team1A">
	<?php 
	if($row2['currentques']==1)
		echo ($row2['Q1ans']);
		elseif($row2['currentques']==2)
		echo ($row2['Q2ans']);
		elseif($row2['currentques']==3)
		echo ($row2['Q3ans']);
		elseif($row2['currentques']==4)
		echo ($row2['Q4ans']);
		elseif($row2['currentques']==5)
		echo ($row2['Q5ans']);
		elseif($row2['currentques']==6)
		echo ($row2['Q6ans']);
		elseif($row2['currentques']==7)
		echo ($row2['Q7ans']);
		elseif($row2['currentques']==8)
		echo ($row2['Q8ans']);
		elseif($row2['currentques']==9)
		echo ($row2['Q9ans']);
		elseif($row2['currentques']==10)
		echo ($row2['Q10ans']);
		
	?>

	
</div>
</td>
<td><div id="Team2A">
	<?php 
	if($row3['currentques']==1)
		echo ($row3['Q1ans']);
		elseif($row3['currentques']==2)
		echo ($row3['Q2ans']);
		elseif($row3['currentques']==3)
		echo ($row3['Q3ans']);
		elseif($row3['currentques']==4)
		echo ($row3['Q4ans']);
		elseif($row3['currentques']==5)
		echo ($row3['Q5ans']);
		elseif($row3['currentques']==6)
		echo ($row3['Q6ans']);
		elseif($row3['currentques']==7)
		echo ($row3['Q7ans']);
		elseif($row3['currentques']==8)
		echo ($row3['Q8ans']);
		elseif($row3['currentques']==9)
		echo ($row3['Q9ans']);
		elseif($row3['currentques']==10)
		echo ($row3['Q10ans']);
		
	?>
</div></td>
<td><div id="Team3A">
	<?php 
	if($row4['currentques']==1)
		echo ($row4['Q1ans']);
		elseif($row4['currentques']==2)
		echo ($row4['Q2ans']);
		elseif($row4['currentques']==3)
		echo ($row4['Q3ans']);
		elseif($row4['currentques']==4)
		echo ($row4['Q4ans']);
		elseif($row4['currentques']==5)
		echo ($row4['Q5ans']);
		elseif($row4['currentques']==6)
		echo ($row4['Q6ans']);
		elseif($row4['currentques']==7)
		echo ($row4['Q7ans']);
		elseif($row4['currentques']==8)
		echo ($row4['Q8ans']);
		elseif($row4['currentques']==9)
		echo ($row4['Q9ans']);
		elseif($row4['currentques']==10)
		echo ($row4['Q10ans']);
		
	?>
</div></td>
<td><div id="Team4A">
	<?php 
	if($row5['currentques']==1)
		echo ($row5['Q1ans']);
		elseif($row5['currentques']==2)
		echo ($row5['Q2ans']);
		elseif($row5['currentques']==3)
		echo ($row5['Q3ans']);
		elseif($row5['currentques']==4)
		echo ($row5['Q4ans']);
		elseif($row5['currentques']==5)
		echo ($row5['Q5ans']);
		elseif($row5['currentques']==6)
		echo ($row5['Q6ans']);
		elseif($row5['currentques']==7)
		echo ($row5['Q7ans']);
		elseif($row5['currentques']==8)
		echo ($row5['Q8ans']);
		elseif($row5['currentques']==9)
		echo ($row5['Q9ans']);
		elseif($row5['currentques']==10)
		echo ($row5['Q10ans']);
		
	?>
</div></td>
</tr>
<tr>
<td><button id="Team1Right">Right</button><button id="Team1Wrong">Wrong</button></td>
<td><button id="Team2Right">Right</button><button id="Team2Wrong">Wrong</button></td>
<td><button id="Team3Right">Right</button><button id="Team3Wrong">Wrong</button></td>
<td><button id="Team4Right">Right</button><button id="Team4Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team5</td>
<td>Team6</td>
<td>Team7</td>
<td>Team8</td>
</tr>
<tr>
<td><div id="Team5Q"><?php echo ($row6['currentques']); ?></div></td>
<td><div id="Team6Q"><?php echo ($row7['currentques']); ?></div></td>
<td><div id="Team7Q"><?php echo ($row8['currentques']); ?></div></td>
<td><div id="Team8Q"><?php echo ($row9['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team5A">
	<?php 
	if($row6['currentques']==1)
		echo ($row6['Q1ans']);
		elseif($row6['currentques']==2)
		echo ($row6['Q2ans']);
		elseif($row6['currentques']==3)
		echo ($row6['Q3ans']);
		elseif($row6['currentques']==4)
		echo ($row6['Q4ans']);
		elseif($row6['currentques']==5)
		echo ($row6['Q5ans']);
		elseif($row6['currentques']==6)
		echo ($row6['Q6ans']);
		elseif($row6['currentques']==7)
		echo ($row6['Q7ans']);
		elseif($row6['currentques']==8)
		echo ($row6['Q8ans']);
		elseif($row6['currentques']==9)
		echo ($row6['Q9ans']);
		elseif($row6['currentques']==10)
		echo ($row6['Q10ans']);
		
	?>
</div></td>
<td><div id="Team6A">
	<?php 
	if($row7['currentques']==1)
		echo ($row7['Q1ans']);
		elseif($row7['currentques']==2)
		echo ($row7['Q2ans']);
		elseif($row7['currentques']==3)
		echo ($row7['Q3ans']);
		elseif($row7['currentques']==4)
		echo ($row7['Q4ans']);
		elseif($row7['currentques']==5)
		echo ($row7['Q5ans']);
		elseif($row7['currentques']==6)
		echo ($row7['Q6ans']);
		elseif($row7['currentques']==7)
		echo ($row7['Q7ans']);
		elseif($row7['currentques']==8)
		echo ($row7['Q8ans']);
		elseif($row7['currentques']==9)
		echo ($row7['Q9ans']);
		elseif($row7['currentques']==10)
		echo ($row7['Q10ans']);
		
	?>
</div></td>
<td><div id="Team7A">
	<?php 
	if($row8['currentques']==1)
		echo ($row8['Q1ans']);
		elseif($row8['currentques']==2)
		echo ($row8['Q2ans']);
		elseif($row8['currentques']==3)
		echo ($row8['Q3ans']);
		elseif($row8['currentques']==4)
		echo ($row8['Q4ans']);
		elseif($row8['currentques']==5)
		echo ($row8['Q5ans']);
		elseif($row8['currentques']==6)
		echo ($row8['Q6ans']);
		elseif($row8['currentques']==7)
		echo ($row8['Q7ans']);
		elseif($row8['currentques']==8)
		echo ($row8['Q8ans']);
		elseif($row8['currentques']==9)
		echo ($row8['Q9ans']);
		elseif($row8['currentques']==10)
		echo ($row8['Q10ans']);
		
	?>
</div></td>
<td><div id="Team8A">
	<?php 
	if($row9['currentques']==1)
		echo ($row9['Q1ans']);
		elseif($row9['currentques']==2)
		echo ($row9['Q2ans']);
		elseif($row9['currentques']==3)
		echo ($row9['Q3ans']);
		elseif($row9['currentques']==4)
		echo ($row9['Q4ans']);
		elseif($row9['currentques']==5)
		echo ($row9['Q5ans']);
		elseif($row9['currentques']==6)
		echo ($row9['Q6ans']);
		elseif($row9['currentques']==7)
		echo ($row9['Q7ans']);
		elseif($row9['currentques']==8)
		echo ($row9['Q8ans']);
		elseif($row9['currentques']==9)
		echo ($row9['Q9ans']);
		elseif($row9['currentques']==10)
		echo ($row9['Q10ans']);
		
	?>
</div></td>
</tr>
<tr>
<td><button id="Team5Right">Right</button><button id="Team5Wrong">Wrong</button></td>
<td><button id="Team6Right">Right</button><button id="Team6Wrong">Wrong</button></td>
<td><button id="Team7Right">Right</button><button id="Team7Wrong">Wrong</button></td>
<td><button id="Team8Right">Right</button><button id="Team8Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team9</td>
<td>Team10</td>
<td>Team11</td>
<td>Team12</td>
</tr>
<tr>
<td><div id="Team9Q"><?php echo ($row10['currentques']); ?></div></td>
<td><div id="Team10Q"><?php echo ($row11['currentques']); ?></div></td>
<td><div id="Team11Q"><?php echo ($row12['currentques']); ?></div></td>
<td><div id="Team12Q"><?php echo ($row13['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team9A">
	<?php 
	if($row10['currentques']==1)
		echo ($row10['Q1ans']);
		elseif($row['currentques']==2)
		echo ($row10['Q2ans']);
		elseif($row10['currentques']==3)
		echo ($row10['Q3ans']);
		elseif($row10['currentques']==4)
		echo ($row10['Q4ans']);
		elseif($row10['currentques']==5)
		echo ($row10['Q5ans']);
		elseif($row10['currentques']==6)
		echo ($row10['Q6ans']);
		elseif($row10['currentques']==7)
		echo ($row10['Q7ans']);
		elseif($row10['currentques']==8)
		echo ($row10['Q8ans']);
		elseif($row10['currentques']==9)
		echo ($row10['Q9ans']);
		elseif($row10['currentques']==10)
		echo ($row10['Q10ans']);
		
	?>
</div></td>
<td><div id="Team10A">
	<?php 
	if($row11['currentques']==1)
		echo ($row11['Q1ans']);
		elseif($row11['currentques']==2)
		echo ($row11['Q2ans']);
		elseif($row11['currentques']==3)
		echo ($row11['Q3ans']);
		elseif($row11['currentques']==4)
		echo ($row11['Q4ans']);
		elseif($row11['currentques']==5)
		echo ($row11['Q5ans']);
		elseif($row11['currentques']==6)
		echo ($row11['Q6ans']);
		elseif($row11['currentques']==7)
		echo ($row11['Q7ans']);
		elseif($row11['currentques']==8)
		echo ($row11['Q8ans']);
		elseif($row11['currentques']==9)
		echo ($row11['Q9ans']);
		elseif($row11['currentques']==10)
		echo ($row11['Q10ans']);
		
	?>
</div></td>
<td><div id="Team11A">
	<?php 
	if($row12['currentques']==1)
		echo ($row12['Q1ans']);
		elseif($row12['currentques']==2)
		echo ($row12['Q2ans']);
		elseif($row12['currentques']==3)
		echo ($row12['Q3ans']);
		elseif($row12['currentques']==4)
		echo ($row12['Q4ans']);
		elseif($row12['currentques']==5)
		echo ($row12['Q5ans']);
		elseif($row12['currentques']==6)
		echo ($row12['Q6ans']);
		elseif($row12['currentques']==7)
		echo ($row12['Q7ans']);
		elseif($row12['currentques']==8)
		echo ($row12['Q8ans']);
		elseif($row12['currentques']==9)
		echo ($row12['Q9ans']);
		elseif($row12['currentques']==10)
		echo ($row12['Q10ans']);
		
	?>
</div></td>
<td><div id="Team12A">
	<?php 
	if($row13['currentques']==1)
		echo ($row13['Q1ans']);
		elseif($row13['currentques']==2)
		echo ($row13['Q2ans']);
		elseif($row13['currentques']==3)
		echo ($row13['Q3ans']);
		elseif($row13['currentques']==4)
		echo ($row13['Q4ans']);
		elseif($row13['currentques']==5)
		echo ($row13['Q5ans']);
		elseif($row13['currentques']==6)
		echo ($row13['Q6ans']);
		elseif($row13['currentques']==7)
		echo ($row13['Q7ans']);
		elseif($row13['currentques']==8)
		echo ($row13['Q8ans']);
		elseif($row13['currentques']==9)
		echo ($row13['Q9ans']);
		elseif($row13['currentques']==10)
		echo ($row13['Q10ans']);
		
	?>
</div></td>
</tr>
<tr>
<td><button id="Team9Right">Right</button><button id="Team9Wrong">Wrong</button></td>
<td><button id="Team10Right">Right</button><button id="Team10Wrong">Wrong</button></td>
<td><button id="Team11Right">Right</button><button id="Team11Wrong">Wrong</button></td>
<td><button id="Team12Right">Right</button><button id="Team12Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team13</td>
<td>Team14</td>
<td>Team15</td>
<td>Team16</td>
</tr>
<tr>
<td><div id="Team13Q"><?php echo ($row14['currentques']); ?></div></td>
<td><div id="Team14Q"><?php echo ($row15['currentques']); ?></div></td>
<td><div id="Team15Q"><?php echo ($row16['currentques']); ?></div></td>
<td><div id="Team16Q"><?php echo ($row17['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team13A">
	<?php 
	if($row14['currentques']==1)
		echo ($row14['Q1ans']);
		elseif($row14['currentques']==2)
		echo ($row14['Q2ans']);
		elseif($row14['currentques']==3)
		echo ($row14['Q3ans']);
		elseif($row14['currentques']==4)
		echo ($row14['Q4ans']);
		elseif($row14['currentques']==5)
		echo ($row14['Q5ans']);
		elseif($row14['currentques']==6)
		echo ($row14['Q6ans']);
		elseif($row14['currentques']==7)
		echo ($row14['Q7ans']);
		elseif($row14['currentques']==8)
		echo ($row14['Q8ans']);
		elseif($row14['currentques']==9)
		echo ($row14['Q9ans']);
		elseif($row14['currentques']==10)
		echo ($row14['Q10ans']);
		
	?>
</div></td>
<td><div id="Team14A">
	<?php 
	if($row15['currentques']==1)
		echo ($row15['Q1ans']);
		elseif($row15['currentques']==2)
		echo ($row15['Q2ans']);
		elseif($row15['currentques']==3)
		echo ($row15['Q3ans']);
		elseif($row15['currentques']==4)
		echo ($row15['Q4ans']);
		elseif($row15['currentques']==5)
		echo ($row15['Q5ans']);
		elseif($row15['currentques']==6)
		echo ($row15['Q6ans']);
		elseif($row15['currentques']==7)
		echo ($row15['Q7ans']);
		elseif($row15['currentques']==8)
		echo ($row15['Q8ans']);
		elseif($row15['currentques']==9)
		echo ($row15['Q9ans']);
		elseif($row15['currentques']==10)
		echo ($row15['Q10ans']);
		
	?>
</div></td>
<td><div id="Team15A">
	<?php 
	if($row16['currentques']==1)
		echo ($row16['Q1ans']);
		elseif($row16['currentques']==2)
		echo ($row16['Q2ans']);
		elseif($row16['currentques']==3)
		echo ($row16['Q3ans']);
		elseif($row16['currentques']==4)
		echo ($row16['Q4ans']);
		elseif($row16['currentques']==5)
		echo ($row16['Q5ans']);
		elseif($row16['currentques']==6)
		echo ($row16['Q6ans']);
		elseif($row16['currentques']==7)
		echo ($row16['Q7ans']);
		elseif($row16['currentques']==8)
		echo ($row16['Q8ans']);
		elseif($row16['currentques']==9)
		echo ($row16['Q9ans']);
		elseif($row16['currentques']==10)
		echo ($row16['Q10ans']);
		
	?>
</div></td>
<td><div id="Team16A">
	<?php 
	if($row17['currentques']==1)
		echo ($row17['Q1ans']);
		elseif($row17['currentques']==2)
		echo ($row17['Q2ans']);
		elseif($row17['currentques']==3)
		echo ($row17['Q3ans']);
		elseif($row17['currentques']==4)
		echo ($row17['Q4ans']);
		elseif($row17['currentques']==5)
		echo ($row17['Q5ans']);
		elseif($row17['currentques']==6)
		echo ($row17['Q6ans']);
		elseif($row17['currentques']==7)
		echo ($row17['Q7ans']);
		elseif($row17['currentques']==8)
		echo ($row17['Q8ans']);
		elseif($row17['currentques']==9)
		echo ($row17['Q9ans']);
		elseif($row17['currentques']==10)
		echo ($row17['Q10ans']);
		
	?>
</div></td>
</tr>
<tr>
<td><button id="Team13Right">Right</button><button id="Team13Wrong">Wrong</button></td>
<td><button id="Team14Right">Right</button><button id="Team14Wrong">Wrong</button></td>
<td><button id="Team15Right">Right</button><button id="Team15Wrong">Wrong</button></td>
<td><button id="Team16Right">Right</button><button id="Team16Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team17</td>
<td>Team18</td>
<td>Team19</td>
<td>Team20</td>
</tr>
<tr>
<td><div id="Team17Q"><?php echo ($row18['currentques']); ?></div></td>
<td><div id="Team18Q"><?php echo ($row19['currentques']); ?></div></td>
<td><div id="Team19Q"><?php echo ($row20['currentques']); ?></div></td>
<td><div id="Team20Q"><?php echo ($row21['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team17A">
	<?php 
	if($row18['currentques']==1)
		echo ($row18['Q1ans']);
		elseif($row18['currentques']==2)
		echo ($row18['Q2ans']);
		elseif($row18['currentques']==3)
		echo ($row18['Q3ans']);
		elseif($row18['currentques']==4)
		echo ($row18['Q4ans']);
		elseif($row18['currentques']==5)
		echo ($row18['Q5ans']);
		elseif($row18['currentques']==6)
		echo ($row18['Q6ans']);
		elseif($row18['currentques']==7)
		echo ($row18['Q7ans']);
		elseif($row18['currentques']==8)
		echo ($row18['Q8ans']);
		elseif($row18['currentques']==9)
		echo ($row18['Q9ans']);
		elseif($row18['currentques']==10)
		echo ($row18['Q10ans']);
		
	?>
</div></td>
<td><div id="Team18A">
	<?php 
	if($row19['currentques']==1)
		echo ($row19['Q1ans']);
		elseif($row19['currentques']==2)
		echo ($row19['Q2ans']);
		elseif($row19['currentques']==3)
		echo ($row19['Q3ans']);
		elseif($row19['currentques']==4)
		echo ($row19['Q4ans']);
		elseif($row19['currentques']==5)
		echo ($row19['Q5ans']);
		elseif($row19['currentques']==6)
		echo ($row19['Q6ans']);
		elseif($row19['currentques']==7)
		echo ($row19['Q7ans']);
		elseif($row19['currentques']==8)
		echo ($row19['Q8ans']);
		elseif($row19['currentques']==9)
		echo ($row19['Q9ans']);
		elseif($row19['currentques']==10)
		echo ($row19['Q10ans']);
		
	?>
</div></td>
<td><div id="Team19A">
	<?php 
	if($row20['currentques']==1)
		echo ($row20['Q1ans']);
		elseif($row20['currentques']==2)
		echo ($row20['Q2ans']);
		elseif($row20['currentques']==3)
		echo ($row20['Q3ans']);
		elseif($row20['currentques']==4)
		echo ($row20['Q4ans']);
		elseif($row20['currentques']==5)
		echo ($row20['Q5ans']);
		elseif($row20['currentques']==6)
		echo ($row20['Q6ans']);
		elseif($row20['currentques']==7)
		echo ($row20['Q7ans']);
		elseif($row20['currentques']==8)
		echo ($row20['Q8ans']);
		elseif($row20['currentques']==9)
		echo ($row20['Q9ans']);
		elseif($row20['currentques']==10)
		echo ($row20['Q10ans']);
		
	?>
</div></td>
<td><div id="Team20A">
	<?php 
	if($row21['currentques']==1)
		echo ($row21['Q1ans']);
		elseif($row21['currentques']==2)
		echo ($row21['Q2ans']);
		elseif($row21['currentques']==3)
		echo ($row21['Q3ans']);
		elseif($row21['currentques']==4)
		echo ($row21['Q4ans']);
		elseif($row21['currentques']==5)
		echo ($row21['Q5ans']);
		elseif($row21['currentques']==6)
		echo ($row21['Q6ans']);
		elseif($row21['currentques']==7)
		echo ($row21['Q7ans']);
		elseif($row21['currentques']==8)
		echo ($row21['Q8ans']);
		elseif($row21['currentques']==9)
		echo ($row21['Q9ans']);
		elseif($row21['currentques']==10)
		echo ($row21['Q10ans']);
		
	?>
</div></td>
</tr>
<tr>
<td><button id="Team17Right">Right</button><button id="Team17Wrong">Wrong</button></td>
<td><button id="Team18Right">Right</button><button id="Team18Wrong">Wrong</button></td>
<td><button id="Team19Right">Right</button><button id="Team19Wrong">Wrong</button></td>
<td><button id="Team20Right">Right</button><button id="Team20Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team21</td>
<td>Team22</td>
<td>Team23</td>
<td>Team24</td>
</tr>
<tr>
<td><div id="Team21Q"><?php echo ($row22['currentques']); ?></div></td>
<td><div id="Team22Q"><?php echo ($row23['currentques']); ?></div></td>
<td><div id="Team23Q"><?php echo ($row24['currentques']); ?></div></td>
<td><div id="Team24Q"><?php echo ($row25['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team21A">
	<?php 
	if($row22['currentques']==1)
		echo ($row22['Q1ans']);
		elseif($row22['currentques']==2)
		echo ($row22['Q2ans']);
		elseif($row22['currentques']==3)
		echo ($row22['Q3ans']);
		elseif($row22['currentques']==4)
		echo ($row22['Q4ans']);
		elseif($row22['currentques']==5)
		echo ($row22['Q5ans']);
		elseif($row22['currentques']==6)
		echo ($row22['Q6ans']);
		elseif($row22['currentques']==7)
		echo ($row22['Q7ans']);
		elseif($row22['currentques']==8)
		echo ($row22['Q8ans']);
		elseif($row22['currentques']==9)
		echo ($row22['Q9ans']);
		elseif($row22['currentques']==10)
		echo ($row22['Q10ans']);
		
	?>
</div></td>
<td><div id="Team22A">
	<?php 
	if($row23['currentques']==1)
		echo ($row23['Q1ans']);
		elseif($row23['currentques']==2)
		echo ($row23['Q2ans']);
		elseif($row23['currentques']==3)
		echo ($row23['Q3ans']);
		elseif($row23['currentques']==4)
		echo ($row23['Q4ans']);
		elseif($row23['currentques']==5)
		echo ($row23['Q5ans']);
		elseif($row23['currentques']==6)
		echo ($row23['Q6ans']);
		elseif($row23['currentques']==7)
		echo ($row23['Q7ans']);
		elseif($row23['currentques']==8)
		echo ($row23['Q8ans']);
		elseif($row23['currentques']==9)
		echo ($row23['Q9ans']);
		elseif($row23['currentques']==10)
		echo ($row23['Q10ans']);
		
	?>
</div></td>
<td><div id="Team23A">
	<?php 
	if($row24['currentques']==1)
		echo ($row24['Q1ans']);
		elseif($row24['currentques']==2)
		echo ($row24['Q2ans']);
		elseif($row24['currentques']==3)
		echo ($row24['Q3ans']);
		elseif($row24['currentques']==4)
		echo ($row24['Q4ans']);
		elseif($row24['currentques']==5)
		echo ($row24['Q5ans']);
		elseif($row24['currentques']==6)
		echo ($row24['Q6ans']);
		elseif($row24['currentques']==7)
		echo ($row24['Q7ans']);
		elseif($row24['currentques']==8)
		echo ($row24['Q8ans']);
		elseif($row24['currentques']==9)
		echo ($row24['Q9ans']);
		elseif($row24['currentques']==10)
		echo ($row24['Q10ans']);
		
	?>
</div></td>
<td><div id="Team24A">
	<?php 
	if($row25['currentques']==1)
		echo ($row25['Q1ans']);
		elseif($row25['currentques']==2)
		echo ($row25['Q2ans']);
		elseif($row25['currentques']==3)
		echo ($row25['Q3ans']);
		elseif($row25['currentques']==4)
		echo ($row25['Q4ans']);
		elseif($row25['currentques']==5)
		echo ($row25['Q5ans']);
		elseif($row25['currentques']==6)
		echo ($row25['Q6ans']);
		elseif($row25['currentques']==7)
		echo ($row25['Q7ans']);
		elseif($row25['currentques']==8)
		echo ($row25['Q8ans']);
		elseif($row25['currentques']==9)
		echo ($row25['Q9ans']);
		elseif($row25['currentques']==10)
		echo ($row25['Q10ans']);
		
	?>
</div></td>
</tr>
<tr>
<td><button id="Team21Right">Right</button><button id="Team21Wrong">Wrong</button></td>
<td><button id="Team22Right">Right</button><button id="Team22Wrong">Wrong</button></td>
<td><button id="Team23Right">Right</button><button id="Team23Wrong">Wrong</button></td>
<td><button id="Team24Right">Right</button><button id="Team24Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team25</td>
<td>Team26</td>
<td>Team27</td>
<td>Team28</td>
</tr>
<tr>
<td><div id="Team25Q"><?php echo ($row26['currentques']); ?></div></td>
<td><div id="Team26Q"><?php echo ($row27['currentques']); ?></div></td>
<td><div id="Team27Q"><?php echo ($row28['currentques']); ?></div></td>
<td><div id="Team28Q"><?php echo ($row29['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team25A">
	<?php 
	if($row26['currentques']==1)
		echo ($row26['Q1ans']);
		elseif($row26['currentques']==2)
		echo ($row26['Q2ans']);
		elseif($row26['currentques']==3)
		echo ($row26['Q3ans']);
		elseif($row26['currentques']==4)
		echo ($row26['Q4ans']);
		elseif($row26['currentques']==5)
		echo ($row26['Q5ans']);
		elseif($row26['currentques']==6)
		echo ($row26['Q6ans']);
		elseif($row26['currentques']==7)
		echo ($row26['Q7ans']);
		elseif($row26['currentques']==8)
		echo ($row26['Q8ans']);
		elseif($row26['currentques']==9)
		echo ($row26['Q9ans']);
		elseif($row26['currentques']==10)
		echo ($row26['Q10ans']);
		
	?>
</div></td>
<td><div id="Team26A">
	<?php 
	if($row27['currentques']==1)
		echo ($row27['Q1ans']);
		elseif($row27['currentques']==2)
		echo ($row27['Q2ans']);
		elseif($row27['currentques']==3)
		echo ($row27['Q3ans']);
		elseif($row27['currentques']==4)
		echo ($row27['Q4ans']);
		elseif($row27['currentques']==5)
		echo ($row27['Q5ans']);
		elseif($row27['currentques']==6)
		echo ($row27['Q6ans']);
		elseif($row27['currentques']==7)
		echo ($row27['Q7ans']);
		elseif($row27['currentques']==8)
		echo ($row27['Q8ans']);
		elseif($row27['currentques']==9)
		echo ($row27['Q9ans']);
		elseif($row27['currentques']==10)
		echo ($row27['Q10ans']);
		
	?>
</div></td>
<td><div id="Team27A">
	<?php 
	if($row28['currentques']==1)
		echo ($row28['Q1ans']);
		elseif($row28['currentques']==2)
		echo ($row28['Q2ans']);
		elseif($row28['currentques']==3)
		echo ($row28['Q3ans']);
		elseif($row28['currentques']==4)
		echo ($row28['Q4ans']);
		elseif($row28['currentques']==5)
		echo ($row28['Q5ans']);
		elseif($row28['currentques']==6)
		echo ($row28['Q6ans']);
		elseif($row28['currentques']==7)
		echo ($row28['Q7ans']);
		elseif($row28['currentques']==8)
		echo ($row28['Q8ans']);
		elseif($row28['currentques']==9)
		echo ($row28['Q9ans']);
		elseif($row28['currentques']==10)
		echo ($row28['Q10ans']);
		
	?>
</div></td>
<td><div id="Team28A">
	<?php 
	if($row29['currentques']==1)
		echo ($row29['Q1ans']);
		elseif($row29['currentques']==2)
		echo ($row29['Q2ans']);
		elseif($row29['currentques']==3)
		echo ($row29['Q3ans']);
		elseif($row29['currentques']==4)
		echo ($row29['Q4ans']);
		elseif($row29['currentques']==5)
		echo ($row29['Q5ans']);
		elseif($row29['currentques']==6)
		echo ($row29['Q6ans']);
		elseif($row29['currentques']==7)
		echo ($row29['Q7ans']);
		elseif($row29['currentques']==8)
		echo ($row29['Q8ans']);
		elseif($row29['currentques']==9)
		echo ($row29['Q9ans']);
		elseif($row29['currentques']==10)
		echo ($row29['Q10ans']);
		
	?>
</div></td>
</tr>
<tr>
<td><button id="Team25Right">Right</button><button id="Team25Wrong">Wrong</button></td>
<td><button id="Team26Right">Right</button><button id="Team26Wrong">Wrong</button></td>
<td><button id="Team27Right">Right</button><button id="Team27Wrong">Wrong</button></td>
<td><button id="Team28Right">Right</button><button id="Team28Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team29</td>
<td>Team30</td>
<td>Team31</td>
<td>Team32</td>
</tr>
<tr>
<td><div id="Team29Q"><?php echo ($row30['currentques']); ?></div></td>
<td><div id="Team30Q"><?php echo ($row31['currentques']); ?></div></td>
<td><div id="Team31Q"><?php echo ($row32['currentques']); ?></div></td>
<td><div id="Team32Q"><?php echo ($row33['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team29A">
	<?php 
	if($row30['currentques']==1)
		echo ($row30['Q1ans']);
		elseif($row30['currentques']==2)
		echo ($row30['Q2ans']);
		elseif($row30['currentques']==3)
		echo ($row30['Q3ans']);
		elseif($row30['currentques']==4)
		echo ($row30['Q4ans']);
		elseif($row30['currentques']==5)
		echo ($row30['Q5ans']);
		elseif($row30['currentques']==6)
		echo ($row30['Q6ans']);
		elseif($row30['currentques']==7)
		echo ($row30['Q7ans']);
		elseif($row30['currentques']==8)
		echo ($row30['Q8ans']);
		elseif($row30['currentques']==9)
		echo ($row30['Q9ans']);
		elseif($row30['currentques']==10)
		echo ($row30['Q10ans']);
		
	?>
</div></td>
<td><div id="Team30A">
	<?php 
	if($row31['currentques']==1)
		echo ($row31['Q1ans']);
		elseif($row31['currentques']==2)
		echo ($row31['Q2ans']);
		elseif($row31['currentques']==3)
		echo ($row31['Q3ans']);
		elseif($row31['currentques']==4)
		echo ($row31['Q4ans']);
		elseif($row31['currentques']==5)
		echo ($row31['Q5ans']);
		elseif($row31['currentques']==6)
		echo ($row31['Q6ans']);
		elseif($row31['currentques']==7)
		echo ($row31['Q7ans']);
		elseif($row31['currentques']==8)
		echo ($row31['Q8ans']);
		elseif($row31['currentques']==9)
		echo ($row31['Q9ans']);
		elseif($row31['currentques']==10)
		echo ($row31['Q10ans']);
		
	?>
</div></td>
<td><div id="Team31A">
	<?php 
	if($row32['currentques']==1)
		echo ($row32['Q1ans']);
		elseif($row32['currentques']==2)
		echo ($row32['Q2ans']);
		elseif($row32['currentques']==3)
		echo ($row32['Q3ans']);
		elseif($row32['currentques']==4)
		echo ($row32['Q4ans']);
		elseif($row32['currentques']==5)
		echo ($row32['Q5ans']);
		elseif($row32['currentques']==6)
		echo ($row32['Q6ans']);
		elseif($row32['currentques']==7)
		echo ($row32['Q7ans']);
		elseif($row32['currentques']==8)
		echo ($row32['Q8ans']);
		elseif($row32['currentques']==9)
		echo ($row32['Q9ans']);
		elseif($row32['currentques']==10)
		echo ($row32['Q10ans']);
		
	?>
</div></td>
<td><div id="Team32A">
	<?php 
	if($row33['currentques']==1)
		echo ($row33['Q1ans']);
		elseif($row33['currentques']==2)
		echo ($row33['Q2ans']);
		elseif($row33['currentques']==3)
		echo ($row33['Q3ans']);
		elseif($row33['currentques']==4)
		echo ($row33['Q4ans']);
		elseif($row33['currentques']==5)
		echo ($row33['Q5ans']);
		elseif($row33['currentques']==6)
		echo ($row33['Q6ans']);
		elseif($row33['currentques']==7)
		echo ($row33['Q7ans']);
		elseif($row33['currentques']==8)
		echo ($row33['Q8ans']);
		elseif($row33['currentques']==9)
		echo ($row33['Q9ans']);
		elseif($row33['currentques']==10)
		echo ($row33['Q10ans']);
		
	?>
</div></td>
</tr>
<tr>
<td><button id="Team29Right">Right</button><button id="Team29Wrong">Wrong</button></td>
<td><button id="Team30Right">Right</button><button id="Team30Wrong">Wrong</button></td>
<td><button id="Team31Right">Right</button><button id="Team31Wrong">Wrong</button></td>
<td><button id="Team32Right">Right</button><button id="Team32Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team33</td>
<td>Team34</td>
<td>Team35</td>
<td>Team36</td>
</tr>
<tr>
<td><div id="Team33Q"><?php echo ($row34['currentques']); ?></div></td>
<td><div id="Team34Q"><?php echo ($row35['currentques']); ?></div></td>
<td><div id="Team35Q"><?php echo ($row36['currentques']); ?></div></td>
<td><div id="Team36Q"><?php echo ($row37['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team33A"></div>
<?php 
	if($row34['currentques']==1)
		echo ($row34['Q1ans']);
		elseif($row34['currentques']==2)
		echo ($row34['Q2ans']);
		elseif($row34['currentques']==3)
		echo ($row34['Q3ans']);
		elseif($row34['currentques']==4)
		echo ($row34['Q4ans']);
		elseif($row34['currentques']==5)
		echo ($row34['Q5ans']);
		elseif($row34['currentques']==6)
		echo ($row34['Q6ans']);
		elseif($row34['currentques']==7)
		echo ($row34['Q7ans']);
		elseif($row34['currentques']==8)
		echo ($row34['Q8ans']);
		elseif($row34['currentques']==9)
		echo ($row34['Q9ans']);
		elseif($row34['currentques']==10)
		echo ($row34['Q10ans']);
		
	?></td>
<td><div id="Team34A"></div>
<?php 
	if($row35['currentques']==1)
		echo ($row35['Q1ans']);
		elseif($row35['currentques']==2)
		echo ($row35['Q2ans']);
		elseif($row35['currentques']==3)
		echo ($row35['Q3ans']);
		elseif($row35['currentques']==4)
		echo ($row35['Q4ans']);
		elseif($row35['currentques']==5)
		echo ($row35['Q5ans']);
		elseif($row35['currentques']==6)
		echo ($row35['Q6ans']);
		elseif($row35['currentques']==7)
		echo ($row35['Q7ans']);
		elseif($row35['currentques']==8)
		echo ($row35['Q8ans']);
		elseif($row35['currentques']==9)
		echo ($row35['Q9ans']);
		elseif($row35['currentques']==10)
		echo ($row35['Q10ans']);
		
	?></td>
<td><div id="Team35A"></div>
<?php 
	if($row36['currentques']==1)
		echo ($row36['Q1ans']);
		elseif($row36['currentques']==2)
		echo ($row36['Q2ans']);
		elseif($row36['currentques']==3)
		echo ($row36['Q3ans']);
		elseif($row36['currentques']==4)
		echo ($row36['Q4ans']);
		elseif($row36['currentques']==5)
		echo ($row36['Q5ans']);
		elseif($row36['currentques']==6)
		echo ($row36['Q6ans']);
		elseif($row36['currentques']==7)
		echo ($row36['Q7ans']);
		elseif($row36['currentques']==8)
		echo ($row36['Q8ans']);
		elseif($row36['currentques']==9)
		echo ($row36['Q9ans']);
		elseif($row36['currentques']==10)
		echo ($row36['Q10ans']);
		
	?></td>
<td><div id="Team36A"></div>
<?php 
	if($row37['currentques']==1)
		echo ($row37['Q1ans']);
		elseif($row37['currentques']=2)
		echo ($row37['Q2ans']);
		elseif($row37['currentques']==3)
		echo ($row37['Q3ans']);
		elseif($row37['currentques']==4)
		echo ($row37['Q4ans']);
		elseif($row37['currentques']==5)
		echo ($row37['Q5ans']);
		elseif($row37['currentques']==6)
		echo ($row37['Q6ans']);
		elseif($row37['currentques']==7)
		echo ($row37['Q7ans']);
		elseif($row37['currentques']==8)
		echo ($row37['Q8ans']);
		elseif($row37['currentques']==9)
		echo ($row37['Q9ans']);
		elseif($row37['currentques']==10)
		echo ($row37['Q10ans']);
		
	?></td>
</tr>
<tr>
<td><button id="Team33Right">Right</button><button id="Team33Wrong">Wrong</button></td>
<td><button id="Team34Right">Right</button><button id="Team34Wrong">Wrong</button></td>
<td><button id="Team35Right">Right</button><button id="Team35Wrong">Wrong</button></td>
<td><button id="Team36Right">Right</button><button id="Team36Wrong">Wrong</button></td>
</tr>
<tr>
<td>Team37</td>
</tr>
<tr>
<td><div id="Team37Q"><?php echo ($row38['currentques']); ?></div></td>
</tr>
<tr>
<td><div id="Team37A"></div>
<?php 
	if($row38['currentques']==1)
		echo ($row38['Q1ans']);
		elseif($row38['currentques']==2)
		echo ($row38['Q2ans']);
		elseif($row38['currentques']==3)
		echo ($row38['Q3ans']);
		elseif($row38['currentques']==4)
		echo ($row38['Q4ans']);
		elseif($row38['currentques']==5)
		echo ($row38['Q5ans']);
		elseif($row38['currentques']==6)
		echo ($row38['Q6ans']);
		elseif($row38['currentques']==7)
		echo ($row38['Q7ans']);
		elseif($row38['currentques']==8)
		echo ($row38['Q8ans']);
		elseif($row38['currentques']==9)
		echo ($row38['Q9ans']);
		elseif($row38['currentques']==10)
		echo ($row38['Q10ans']);
		
	?></td>
</tr>
<tr>
<td><button id="Team37Right">Right</button><button id="Team37Wrong">Wrong</button></td>
</tr>

</table>
<script>
var R1 = document.getElementById("Team1Right");
var R2 = document.getElementById("Team2Right");
var R3 = document.getElementById("Team3Right");
var R4 = document.getElementById("Team4Right");
var R5 = document.getElementById("Team5Right");
var R6 = document.getElementById("Team6Right");
var R7 = document.getElementById("Team7Right");
var R8 = document.getElementById("Team8Right");
var R9 = document.getElementById("Team9Right");
var R10 = document.getElementById("Team10Right");
var R11= document.getElementById("Team11Right");
var R12 = document.getElementById("Team12Right");
var R13 = document.getElementById("Team13Right");
var R14 = document.getElementById("Team14Right");
var R15 = document.getElementById("Team15Right");
var R16 = document.getElementById("Team16Right");
var R17 = document.getElementById("Team17Right");
var R18 = document.getElementById("Team18Right");
var R19 = document.getElementById("Team19Right");
var R20 = document.getElementById("Team20Right");
var R21 = document.getElementById("Team21Right");
var R22 = document.getElementById("Team22Right");
var R23 = document.getElementById("Team23Right");
var R24 = document.getElementById("Team24Right");
var R25 = document.getElementById("Team25Right");
var R26 = document.getElementById("Team26Right");
var R27 = document.getElementById("Team27Right");
var R28 = document.getElementById("Team28Right");
var R29 = document.getElementById("Team29Right");
var R30 = document.getElementById("Team30Right");
var R31 = document.getElementById("Team31Right");
var R32 = document.getElementById("Team32Right");
var R33 = document.getElementById("Team33Right");
var R34 = document.getElementById("Team34Right");
var R35 = document.getElementById("Team35Right");
var R36 = document.getElementById("Team36Right");
var R37 = document.getElementById("Team37Right");
var W1 = document.getElementById("Team1Wrong");
var W2 = document.getElementById("Team2Wrong");
var W3 = document.getElementById("Team3Wrong");
var W4 = document.getElementById("Team4Wrong");
var W5 = document.getElementById("Team5Wrong");
var W6 = document.getElementById("Team6Wrong");
var W7 = document.getElementById("Team7Wrong");
var W8 = document.getElementById("Team8Wrong");
var W9 = document.getElementById("Team9Wrong");
var W10 = document.getElementById("Team10Wrong");
var W11 = document.getElementById("Team11Wrong");
var W12 = document.getElementById("Team12Wrong");
var W13 = document.getElementById("Team13Wrong");
var W14 = document.getElementById("Team14Wrong");
var W15 = document.getElementById("Team15Wrong");
var W16 = document.getElementById("Team16Wrong");
var W17 = document.getElementById("Team17Wrong");
var W18 = document.getElementById("Team18Wrong");
var W19 = document.getElementById("Team19Wrong");
var W20 = document.getElementById("Team120Wrong");
var W21 = document.getElementById("Team21Wrong");
var W22 = document.getElementById("Team22Wrong");
var W23 = document.getElementById("Team23Wrong");
var W24 = document.getElementById("Team24Wrong");
var W25 = document.getElementById("Team25Wrong");
var W26 = document.getElementById("Team26Wrong");
var W27 = document.getElementById("Team27Wrong");
var W28= document.getElementById("Team28Wrong");
var W29 = document.getElementById("Team29Wrong");
var W30 = document.getElementById("Team30Wrong");
var W31 = document.getElementById("Team31Wrong");
var W32 = document.getElementById("Team32Wrong");
var W33 = document.getElementById("Team33Wrong");
var W34 = document.getElementById("Team34Wrong");
var W35 = document.getElementById("Team35Wrong");
var W36 = document.getElementById("Team36Wrong");
var W37 = document.getElementById("Team37Wrong");

R1.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R1.php'
	});
}
R2.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R2.php'
	});
}
R3.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R3.php'
	});
}
R4.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R4.php'
	});
}
R5.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R5.php'
	});
}
R6.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R6.php'
	});
}
R7.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R7.php'
	});
}
R8.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R8.php'
	});
}
R9.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R9.php'
	});
}
R10.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R10.php'
	});
}
R11.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R11.php'
	});
}
R12.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R12.php'
	});
}
R13.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R13.php'
	});
}
R14.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R14.php'
	});
}
R15.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R15.php'
	});
}
R16.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R16.php'
	});
}
R17.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R17.php'
	});
}
R18.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R18.php'
	});
}
R19.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R19.php'
	});
}
R20.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R20.php'
	});
}
R21.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R21.php'
	});
}
R22.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R22.php'
	});
}
R23.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R23.php'
	});
}
R24.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R24.php'
	});
}
R25.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R25.php'
	});
}
R26.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R26.php'
	});
}
R27.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R27.php'
	});
}
R28.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R28.php'
	});
}
R29.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R29.php'
	});
}
R30.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R30.php'
	});
}
R31.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R31.php'
	});
}
R32.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R32.php'
	});
}
R33.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R33.php'
	});
}
R34.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R34.php'
	});
}
R35.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R35.php'
	});
}
R36.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R36.php'
	});
}
R37.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'R37.php'
	});
}
W1.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W1.php'
	});
}
W2.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W2.php'
	});
}
W3.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W3.php'
	});
}
W4.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W4.php'
	});
}
W5.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W5.php'
	});
}
W6.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W6.php'
	});
}
W7.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W7.php'
	});
}
W8.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W8.php'
	});
}
W9.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W9.php'
	});
}
W10.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W10.php'
	});
}
W11.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W11.php'
	});
}
W12.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W12.php'
	});
}
W13.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W13.php'
	});
}
W14.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W14.php'
	});
}
W15.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W15.php'
	});
}
W16.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W16.php'
	});
}
W17.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W17.php'
	});
}
W18.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W18.php'
	});
}
W19.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W19.php'
	});
}
W20.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W20.php'
	});
}
W21.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W21.php'
	});
}
W22.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W22.php'
	});
}
W23.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W23.php'
	});
}
W24.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W24.php'
	});
}
W25.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W25.php'
	});
}
W26.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W26.php'
	});
}
W27.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W27.php'
	});
}
W28.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W28.php'
	});
}
W29.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W29.php'
	});
}
W30.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W30.php'
	});
}
W31.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W31.php'
	});
}
W32.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W32.php'
	});
}
W33.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W33.php'
	});
}
W34.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W34.php'
	});
}
W35.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W35.php'
	});
}
W36.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W36.php'
	});
}
W37.onclick = function() {
	$.ajax({
                type: 'POST',
                url: 'W37.php'
	});
}

</script>
</body>
</html>