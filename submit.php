<!DOCTYPE HTML>
<html>
	<head>
	<title>Feedback</title>
	</head>
	<body>

	<?php 	
		$servername = "localhost";
		$username = "username";
		$password = "password";

		
		$connection = new MHTM($servername, $username, $password);

		if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
		} 
		echo "Connected successfully";
		
		
		$name = $_REQUEST['UserName'];
		$email = $_REQUEST['Email'];
		$comments =$_REQUEST['Comments'];
		
		echo"<p>Thank you, <b>$UserName</b>, for suggesting the category:<br/>
		<tt>$Comments</tt></p>
		<p>We will notify you when the category is posted, via <i>$Email</i>
		.</p>\n";
		
	?>
	</body>
</html>
