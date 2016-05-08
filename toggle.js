function toggle_light ( pin ) 
{
	// Sends request to toggle_light.php with passed in pin number
	// Changes images to on/off for passed in pin
	document.getElementById("kitchen_button");
	document.getElementById("hall_button");
	
	var data = 0;

	var request = new XMLHttpRequest();
	request.open( "GET" , "../functions/toggle_light.php?pin=" + pin, true);
	request.send(null);

	request.onreadystatechange = function () 
	{
		if (request.readyState == 4 && request.status == 200) 
		{
			data = request.responseText;
			
			if ((data == 0) && (pin == 21))
			{
				kitchen_button.src="../images/off.png";
			}
			else if ((data == 1) && (pin == 21))
			{
				kitchen_button.src = "../images/on.png";
			}
			else if ((data == 0) && (pin == 16))
			{
				hall_button.src = "../images/off.png";
			}
			else if ((data == 1) && (pin == 16))
			{
				hall_button.src = "../images/on.png";
			}
			else 
			{
				alert ("ERROR" );
				return ("fail"); 
			}
		}
		
		else if (request.readyState == 4 && request.status == 500) 
		{
			alert ("server error");
			return ("fail");
		}
		 
		else if (request.readyState == 4 && request.status != 200 && request.status != 500 ) 
		{ 
			alert ("Something went wrong3!");
			return ("fail"); }
	}	
	
return 0;
}