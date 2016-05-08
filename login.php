<?php
	//session_start();
	include("../db.php");
	$sql = "SELECT username FROM users";
	$username = mysqli_query($link, $sql);		
	$sql = "SELECT password FROM users";
	$password = mysqli_query($link, $sql);
?>
	
<!DOCTYPE html>
<!-- Author: Colin Ryan -->
<!-- Login page which takes in entered username and password and matches it with entries in the database -->
<!-- If the entries match then the user is logged in and redirected the Admin Console -->
<!-- Database connection broke and currently not working -->
<html>
<head>
	<title>Control Login</title>
	<link rel="stylesheet" type="text/css" href="../styles/style1.css">
	<meta charset = "utf-8">
</head>
<body>

	<header>
		<h1>Safeguard Security</h1>
	</header>
	
	<nav class="mainmenu">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="products.html">Products</a></li>
			<li><a href="contact-us.html">Contact Us</a>
			<li><a href="login.html">Login</a>
		</ul>
	</nav>
	
	<div class="leftmenu">
		
	</div>
	
	<div class="rightmenu">
		
	</div>
	
	<section>
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
							<tr>
								<td colspan="3"><strong>Member Login </strong></td>
							</tr>
							<tr>
								<td width="78">Username</td>
								<td width="6">:</td>
								<td width="294"><input name="myusername" type="text" id="myusername"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input name="mypassword" type="text" id="mypassword"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="console-info.php"><button>Submit</button></a></td>
							</tr>
						</table>
					</td>
				
			</tr>
		</table>
	</section>

	<footer>
		Copyright © Safeguard Security 2016
	</footer>

</body>
</html>