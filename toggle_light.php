<?php
	// Gets a passed in pin number, reads the current state and then toggles the state
	if (isset ($_GET["pin"])) // Get pin number passed in
	{
		$pin = strip_tags ($_GET["pin"]); // Strip HTML tags
	
		system("gpio -g mode ".$pin." out"); // Set to output
		
		exec("gpio -g read ".$pin, $status, $return); // Get current state (0 or 1)
		
		if ($status[0] == 0) 
		{ 
			$status[0] = 1; // If off then set on
		}
		else
		{ 
			$status[0] = 0; // If one then set off
		}
		
		system("gpio -g write ".$pin." ".$status[0]); // Write change to pin
		
		echo($status[0]); // Return current state
	}
	else 
	{ 
		echo ("No pin"); 
	}	
?>