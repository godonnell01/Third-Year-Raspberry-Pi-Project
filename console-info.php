<?php	
	include("../db.php");
	$sql = "SELECT id FROM customers";
	$id = mysqli_query($link, $sql);		
	$sql = "SELECT first_name FROM customers";
	$username = mysqli_query($link, $sql)
?>

<!DOCTYPE html>
<!-- Author: Colin Ryan -->
<!-- Gets customers data from DB and displays -->
<!-- Database connection broke so currently not working -->
<html>
<head>
	<meta charset = "utf-8">
	<title>Customer Information</title>
	<link rel="stylesheet" type="text/css" href="../styles/style1.css">
</head>
<body>

	<header>
		<h1>Safeguard Security</h1>
	</header>
	
	<nav class="mainmenu">
		<ul>
			<li><a href="console-info.php">Customer Information</a></li>
			<li><a href="console-security.php">Security</a></li>
			<li><a href="console-lighting.php">Lighting</a></li>
			<li><a href="console-heating.php">Heating</a></li>
			<li><a href="index.html">Logout</a></li>
		</ul>
	</nav>
	
	<div class="leftmenu">
		<p>Logged in as:</p>
		<p> ColinR</p>
	</div>
	
	<div class="rightmenu">
		
	</div>
	
	<section>
		<h1>Customer Information</h1>
		<table width="300" style= "float:left" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="2"><strong>ID </strong></td>
							<td><strong>0001 </strong></td>
						</tr>
						<tr>
							<td width="78">Name</td>
							<td width="6">:</td>
							<td width="294">John Higgins</td>
						</tr>
						<tr>
							<td>Address</td>
							<td>:</td>
							<td>Mallow, Co. Cork</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td></td>
						</tr>
					</table>
				</td>
				</form>
			</tr>
		</table>
		<table width="300" style= "float:right" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="2"><strong>Phone: </strong></td>
							<td><strong>022 12345 </strong></td>
						</tr>
						<tr>
							<td width="78">Mobile</td>
							<td width="6">:</td>
							<td width="294">086 258 5555</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>john@gmail.com</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td></td>
						</tr>
					</table>
				</td>
				</form>
			</tr>
		</table>
	</section>

	<footer>
		Copyright © Safeguard Security 2016
	</footer>	
	
</body>
</html>