<?php
	// Get current state of Kitchen Light (Green LED)
	system("gpio -g mode 21 out"); 
	exec ("gpio -g read 21", $kitchen_state, $return);
	// Get current state of Hall Light (Red LED)
	system("gpio -g mode 16 out");
	exec ("gpio -g read 16", $hall_state, $return);
?>

<!DOCTYPE html>
<!-- Author: Colin Ryan -->
<!-- Page to control customers lighting -->
<!-- Scheduler for lighting at the bottom not working -->
<html>
<head>
    <meta charset="utf-8" />
    <title>Lighting Control</title>
	<link rel="stylesheet" type="text/css" href="../styles/style1.css">
	<script src="../scripts/toggle.js"></script>
	<script src="../scripts/scheduler.js"></script>
</head>
 
<body>
	
	<header>
		<h1>Safeguard Security</h1>
	</header>
	
	<nav class="mainmenu">
		<ul>
			<li><a href="console-info.php">Customer Information</a></li>
			<li><a href="console-security.php">Security</a></li>
			<li><a href="console-lighting.php">Lighting</a></li>
			<li><a href="console-heating.php">Heating</a></li>
			<li><a href="index.html">Logout</a></li>
		</ul>
	</nav>
	
	<div class="leftmenu">
		<p>Logged in as:</p>
		<p> ColinR</p>
	</div>
	
	<div class="rightmenu">
		
	</div>
	
	<section>
		<h1>Lighting Control</h1>
		</br>
		<h3>Manual Control</h3>
		<div class="manual">
		<?php
	
		if ($kitchen_state[0] == 0) // If Kitchen light off
		{
			echo ("<img id='kitchen_button' src='../images/off.png' onclick='toggle_light(21);'/>");
		}
		else // If on
		{
			echo ("<img id='kitchen_button' src='../images/on.png' onclick='toggle_light(21);'/>");
		}
	
		if ($hall_state[0] == 0) // If Hall light off
		{
			echo ("<img id='hall_button' src='../images/off.png' onclick='toggle_light(16);'/>");
		}	
		else // If on
		{
			echo ("<img id='hall_button' src='../images/on.png' onclick='toggle_light(16);'/>");
		}		
	
		?>
		</div>
		
		</br>
		</br>
		<h3>Schedule Lights</h3>
		<p>Please select the light to automate, the day and hour you wish it to turn on</p>
		<select name="light" id="light">
			<!--<option value="Select">Select</option>-->
			<option value="21">Kitchen</option>
			<option value="16">Hallway</option>
		</select>
		
		<select name="day" id="day">
			<!--<option value="Select">Select</option>-->
			<option value="1">Monday</option>
			<option value="2">Tuesday</option>
			<option value="3">Wednesday</option>
			<option value="4">Thursday</option>
			<option value="5">Friday</option>
			<option value="6">Saturday</option>
			<option value="7">Sunday</option>
		</select>
		
		<select name="hour" id="hour">
			<!--<option value="Select">Select</option>-->
			<option value="13">13:00</option>
			<option value="14">14:00</option>
			<option value="15">15:00</option>
			<option value="16">16:00</option>
			<option value="17">17:00</option>
			<option value="18">18:00</option>
			<option value="19">19:00</option>
		</select>
		
		<!--<input type="submit" value="Schedule" onclick='test(document.getElementById("light").value)'/>-->
		<input type="submit" value="Schedule" onclick="test();"/>
		<input type="submit" value="Delete" onclick="deleteTask();">
		
	</section>

	<footer>
		Copyright © Safeguard Security 2016
	</footer>

</body>
</html>