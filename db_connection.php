<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "cms";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$database);

	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	echo "LMS database Connected successfully";
?>