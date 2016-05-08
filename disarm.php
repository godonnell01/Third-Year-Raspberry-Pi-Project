<?php
	
	// Kills the picam.py script, Sets both the Red LED and Buzzer to off
	system("sudo pkill -f picam.py");
	system("gpio -g mode 12 out");
	system("gpio -g write 12 0");
	system("gpio -g mode 16 out");
	system("gpio -g write 16 0");
		
?>
