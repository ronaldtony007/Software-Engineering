<?php
$servername = "localhost";
$username = "root";
$password = "root";

function openConnection() {	
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn){
	    die("Connection failed: " . mysqli_connect_error());
	}
	elseif (!mysqli_select_db($conn, "test")) {
		die("Database not Found.");
	}

	return $conn;
}

function closeConnection($conn) {
	mysqli_close($conn);
}

?>