<?php
		// Get current state of (Red LED)
		system("gpio -g mode 16 out");
		exec ("gpio -g read 16", $state, $return);
		
?>

<!DOCTYPE html>
<!-- Author: Colin Ryan -->
<!-- Displays alarm control -->
<!-- Button toggles alarm armed/disarmed -->
<html>
<head>
    <meta charset="utf-8" />
    <title>Security Control</title>
	<link rel="stylesheet" type="text/css" href="../styles/style1.css">
	<script src="../scripts/alarm.js"></script>
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
			<li><a href="../website/index.html">Logout</a></li>
		</ul>
	</nav>
	
	<div class="leftmenu">
		<p>Logged in as:</p>
		<p> ColinR</p>
	</div>
	
	<div class="rightmenu">
		
	</div>
	
	<section>
		<h1>Security Control</h1>
		<h3>Arm/Disarm</h3>
		<?php
				
			if ($state[0] == 0) // If Alarm Disarmed
			{
				//echo ("Disarmed");
				echo ("<img id='alarm_button' src='../images/off.png' onclick='arm_alarm();'/>");
			}	
			else // If Armed
			{
				echo ("<img id='alarm_button' src='../images/on.png' onclick='disarm_alarm();'/>");
			}		
	
		?>
	</section>

	<footer>
		Copyright © Safeguard Security 2016
	</footer>

</body>
</html>