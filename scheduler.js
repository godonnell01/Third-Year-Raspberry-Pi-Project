function test() 
{
	// Attempt at passing values for scheduling system to be written to CRON file
	// Does not work
	var l = document.getElementById('light').value;
	var d = document.getElementById('day').value;
	var h = document.getElementById('hour').value;
	
	var request = new XMLHttpRequest();
	request.open( "GET" , "../functions/schedule_light.php?light=" + l + "&day=" + d + "&hour=" + h, true);
	request.send(null);
}