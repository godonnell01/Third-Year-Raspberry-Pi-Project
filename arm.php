<?php 
	
	// Starts the picam.py script and the camera starts taking low resolution images
	system("sudo python /var/www/html/picam.py &");
	echo("done");
		
?>



