<?php
		// Sets the buzzer off for 3 seconds to test if alarms are working
		system("gpio -g mode 12 out");
		system("gpio -g write 12 1");
		sleep(3);
		system("gpio -g write 12 0");
		system("gpio -g mode 12 in");
		
?>