<?php
	//session_start();
	include("../db.php");
?>
	
<!DOCTYPE html>
<!-- Author: Colin Ryan -->
<!-- Selects customers from database and when submitted will load management console for that customers home -->
<html>
<head>
	<meta charset = "utf-8">
	<title>User Select</title>
	<link rel="stylesheet" type="text/css" href="../styles/style1.css">
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
		<p>Logged in as:</p>
		<p> ColinR</p>
	</div>
	
	<div class="rightmenu">
		
	</div>
	
	<section>
		<?php
			$sql = "SELECT * FROM clients";
			$result = mysqli_query($link, $sql);
	
			while($row = mysqli_fetch_array($result))
			{
				echo $row['first_name'];
			}
	        
			// Close result set
			mysqli_free_result($result);
		?>
	
		</br>
		</br>
		</br>
	
		<form action="page2.php" method="post">
		<select name="user">
			<option value="Select">Select</option>
			<?php 
					$sql = "SELECT * FROM clients";
					$result = mysqli_query($link, $sql);
		
					while($row = mysqli_fetch_array($result))
					{
			?>
			<option value="<?php echo $row['first_name']; ?>"><?php echo $row['first_name']; ?></option>
			<?php } 
		
			// Close result set
			mysqli_free_result($result);
	
			// Close connection
			mysqli_close($link);
			?>
	</select>
	<input type="submit" />
	</form>
	</section>

	<footer>
		Copyright © Safeguard Security 2016
	</footer>

</body>
</html>