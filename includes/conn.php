<?php

	// defining my db credentials for local testing
	$conn = new mysqli('localhost', 'root', '', 'ehcproject');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// defining my db credentials for online testing 

	// $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

	if($conn){
		// echo "connected";
	}else{
		// echo "Not connected";
	}
	
?>