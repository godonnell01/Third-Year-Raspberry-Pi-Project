<?php
	
	// Attempt at starting the sensor board to read temperature.
	// Was going to be called when Heating page was loaded but did not work
	system("sudo python3 /home/pi/rpi_sensor_board/sensor_tamper.py");
	echo("done");
		
?>