<?php 
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$conn = openConnection();

	if ($conn) {
		echo "Connected Successfully.<br>";
	}

	echo "Closing connection.";

	closeConnection($conn);
}
else {
	header("Location: login.html", true, 301);
	exit();
}

?>