<?php 
	// Attempt at scheduling lighting/heating to turn on/off at different times using CRON
	// Does not work
	if (isset ($_GET["light"], $_GET["day"], $_GET["hour"])) // Get pin number passed in
	{
		$light = strip_tags ($_GET["light"]); // Strip HTML tags
		$day = strip_tags ($_GET["day"]); // Strip HTML tags
		$hour = strip_tags ($_GET["hour"]); // Strip HTML tags
	
		system("gpio -g mode 16 out"); // Set to output	
		system("gpio -g write 16 1"); // Write change to pin
	
		system("crontab -l | { cat; echo "0 ".$hour." 0 * ".$day." gpio -g mode 16 out"; } | crontab -");
	
		system("gpio -g mode 16 out"); // Set to output	
		system("gpio -g write 16 1"); // Write change to pin
		
		echo($status[0]); // Return current state
	}
	else 
	{ 
		echo ("No variables set"); 
	}	
?>