function arm_alarm () 
{	
	// Script sends request to arm.php with the passed in pin number
	// Also changes image to other state
	document.getElementById("alarm_button");

	var request = new XMLHttpRequest();
	request.open( "GET" , "../functions/arm.php", true);
	request.send(null);
	
	alarm_button.src="../images/on.png";
		
return 0;
}		

function disarm_alarm () 
{
	// Script sends request to disarm.php with the passed in pin number
	// Also changes image to other state
	document.getElementById("alarm_button");

	var request = new XMLHttpRequest();
	request.open( "GET" , "../functions/disarm.php", true);
	request.send(null);
	
	alarm_button.src="../images/off.png";
		
return 0;
}		
	







