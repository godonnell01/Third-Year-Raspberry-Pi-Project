<?php	
	// Database connection file
	$link = mysqli_connect("localhost", "root", "root", "project");
	
	// Check connection
	if($link === false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>